<?php

namespace App\Http\Controllers;

use App\Models\ProjectList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectlist = DB::table('pending_progress_update_lor')->get();
        $materiallist = DB::table('material')->get();
        $cableslist = DB::table('cables')->get();

        return view('materialrequest', compact('projectlist', 'materiallist','cableslist'));
    }
    public function autofill()
    {
        $materialname = $_REQUEST["q"];
        if($materialname)
        {
            // echo $materialname;
            $material = DB::table('material')->get()->where('material_name',$materialname);
            foreach($material as $material) $materialID = $material->material_id;
    
            // return view('materialrequest', compact('materialID'));
            echo $materialID === "" ? "no suggestion" : $materialID;
        }
        
    }
    /**
     * Show the form for creating a new resource.
     * @param  array  $data
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {

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
     * @param  \App\Models\ProjectList  $projectList
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectList $projectList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectList  $projectList
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectList $projectList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjectList  $projectList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectList $projectList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectList  $projectList
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectList $projectList)
    {
        //
    }
}