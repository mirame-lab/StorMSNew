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
        //
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
        $material = DB::table('material_management__241022')->get()->where('material_id',$request->materialID);
        
        foreach($material as $material){
            $a = (float)$material->quantity;
            $b = (float)$request->quantity;
            DB::update('update material_management__241022 set quantity = ? where material_id = ?',[ $a  += $b, $request->materialID]);
        }
        return redirect()->route('report.index')
            ->with('success', 'Product updated successfully');
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
}
