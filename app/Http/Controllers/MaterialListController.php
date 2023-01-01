<?php

namespace App\Http\Controllers;

use App\Models\MaterialList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaterialListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proj = DB::table('pending_progress_update_lor')->get();
        $c = 0;
        return view('projectlist', compact('proj','c'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MaterialList  $materialList
     * @return \Illuminate\Http\Response
     */
    public function show(MaterialList $materialList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaterialList  $materialList
     * @return \Illuminate\Http\Response
     */
    public function edit(MaterialList $materialList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MaterialList  $materialList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaterialList $materialList)
    {
        $material = DB::table('material')->get()->where('material_id',$request->materialID);
        DB::table('additions')->insert(
            [
                'material_id' => $request->materialID,
                'drum_no' => $request->drum,
                'quantity' => $request->quantity,
                'date_added' => date("j\/n\/Y")
            ]
        );
        
    if($this->iscable($request->materialID))
    {
        DB::table('cables')->insert(
        [
            'material_id' => $request->mat_id,
            'material_name' => $request->mat_name,
            'drum_no' => $request->drum,
            'balance' => $request->q,
            'in_drum' => $request->q
        ]
        );

        $drums = DB::table('cables')->get()->where('material_id',$request->materialID);
        // $drumslist = (array)json_decode($drums);
            // print_r(var_dump($drumslist));
            $balancelist = [];

        foreach($drums as $drums){
                array_push($balancelist, $drums->balance);
        }
            // print_r($balancelist);
        $total  = array_reduce($balancelist, function ($previous, $current) {
            return $previous + $current;
        });

        // print_r($total);
        foreach($material as $material){
            
            DB::update('update material set quantity = ? where material_id = ?',[ $total, $request->materialID]);
        }

    }
    else
    {
        foreach($material as $material){
            $a = (float)$material->quantity;
            $b = (float)$request->quantity;
            DB::update('update material set quantity = ? where material_id = ?',[ $a  += $b, $request->materialID]);
        }
    }

        
        return redirect()->route('report.index')
            ->with('success', 'Product updated successfully');
    }

    public function iscable($mat_id=''){

        if (isset($_REQUEST['q'])){
            $mat_id = $_REQUEST['q'];
        }
            
        $cableList = DB::table('cables')->get();
        $iscable = false;
        
        
        foreach($cableList as $cableList){
            print_r(var_dump($cableList->material_id));
            if($mat_id == $cableList->material_id)
            {
                $iscable = true;
                break;
            }
        }

        return $iscable;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaterialList  $materialList
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaterialList $materialList)
    {
        //
    }

    public function showhistory(){

        $mat_id = $_REQUEST['mat_id'];
        $request = DB::table('request_lists')->get()->where('material_id',$mat_id)->where('SK_approval',true);
        $additions = DB::table('additions')->get()->where('material_id',$mat_id);
        $history = [];

        $description = DB::table('material')->get()->where('material_id',$mat_id)->first()->material_name;


        foreach($request as $request){
            
            array_push($history, [
                'date' => str_replace('/', '-',$request->date_requested),
                'remark' => $request->project_id,
                'qty' => $request->q_taken,
                'vartype' => 'table-danger' 
            ]);
        }

        foreach($additions as $additions){
            array_push($history, [
                'date' => str_replace('/', '-',$additions->date_added),
                'remark' => 'ML Larkin',
                'qty' => $additions->quantity,
                'vartype' => 'table-success' 
            ]);
        }
        
        
        
        usort($history, function($element1, $element2) {
            $datetime1 = strtotime($element1['date']);
            $datetime2 = strtotime($element2['date']);
            return $datetime2 - $datetime1;
        });
        
        // print_r($history);
        return view('history',compact('history','description'));
    }
}
