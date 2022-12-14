<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\RequestList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Array_;
use Symfony\Component\Finder\Iterator\RecursiveDirectoryIterator;

class RequestListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_requests = DB::table('request_lists')->latest('created_at')->get();
        $requests = $all_requests->where('requester_id', Auth::user()->ic);

        $req_list = json_decode(DB::table('request_lists')->get()->where('requester_id', Auth::user()->ic), true);
        $all_req_materials = json_decode(DB::table('request_lists')->get(), true);
        foreach ($req_list as &$req_data) {
            $req_data['mat_name'] = DB::table('material')->get()->where('material_id', $req_data['material_id'])->first()->material_name;
        }
        foreach ($all_req_materials as &$req_data) {
            $req_data['mat_name'] = DB::table('material')->get()->where('material_id', $req_data['material_id'])->first()->material_name;
            $req_data['requester_name'] = DB::table('users')->get()->where('ic', $req_data['requester_id'])->first()->name;
        }

        $all_req_materials = RequestListController::reduce($all_req_materials);
        $req_materials = RequestListController::reduce($req_list);

        return view('Dashboard', compact('req_list', 'all_requests', 'req_materials', 'all_req_materials'));
    }

    public function getDrumList(){
        $cable = $_REQUEST["q"];
        $drumlist = DB::table('cables')->get()->where('material_id',$cable);
        return $drumlist;
    }

    public function reduce($array)
    {
        $r_id_count = array_count_values(array_merge(array_column($array, "request_id")));
        $r_ids = array_keys($r_id_count);

        
        // print_r(count($array).'     ');
        $req_materials = [];
        for ($i = 0; $i < count($r_ids); $i++) { //for each ID
            array_push(
                $req_materials,
                [
                    "r_id" => $r_ids[$i],
                    "materials" => []
                ]
            );
            for ($j = 0; $j < count($array); $j++) { //for each request
                // print_r($array[$j]['request_id'].'   ');
                // print_r($i.'   ');
                // print_r($j.'   ');
                // echo '<br>';
                if (isset($array[$j]['request_id'])  && ($array[$j]['request_id'] == $r_ids[$i])) {
                    array_push(
                        $req_materials[$i]["materials"], $array[$j]
                    );
                }
            }
        }

         return $req_materials;
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
        $result = DB::table('request_lists');
        

        if ($result->get()->isEmpty()) {
            $r_count = 1;

        } else {

            $r_count = mb_substr($result->latest('created_at')->first()->request_id, 3, 5);
            (int) $r_count++;
        }

        $r_num = str_pad($r_count, 5, "0", STR_PAD_LEFT);
        $r_id = "DSR" . $r_num;

        $p_id = $request['proj_id'][0];

        $proj_id = mb_substr($p_id, 0, 11);
        $project = DB::table('pending_progress_update_lor')->get()->where('project_id',$proj_id);
        print_r(var_dump($project->first()));
        if($project->first() === null){
            DB::table('pending_progress_update_lor')->insert(
                [
                    "project_name" => $p_id,
                ]
            );
        }

        for ($i = 0; $i < count((array) $request['req_date']); $i++) {
            $material = DB::table('material')->get()->where('material_id',$request['mat_id'][$i]);
            RequestList::create(
                [
                    'request_id' => $r_id,
                    'requester_id' => $request['ic'][$i],
                    'date_requested' => $request['req_date'][$i],
                    'material_id' => $request['mat_id'][$i],
                    'drum_no' => $request['cables'][$i],
                    'project_id' => $p_id,
                    'q_taken' => $request['quantity'][$i],
                    'SK_approval' => false,
                ]
            );

            if($request['cables'][$i] != ""){
                print_r($request['cables'][$i]);
            }


        }

        return redirect()->route('requestlist.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestList  $requestList
     * @return \Illuminate\Http\Response
     */
    public function show(RequestList $requestList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestList  $requestList
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestList $requestList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestList  $requestList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestList $requestList)
    {

        for ($i = 0; $i < count((array) $request['approve']); $i++) {
            $req = RequestList::find($request['id'][$i]);
            $req->SK_approval = $request['approve'][$i];
            $req->SK_approval_date = date("d/m/Y");
            $material = DB::table('material')->get()->where('material_id',$request['mat_id'][$i]);
            foreach($material as $material){
                DB::update('update material set quantity = ? where material_id = ?',[$material->quantity -= $req->q_taken,$request['mat_id'][$i]]);
            }

            $req->save();

        }
        return redirect()->route('requestlist.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestList  $requestList
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestList $requestList)
    {
        //
    }
}