<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\RequestList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = DB::table('request_lists')->get()->where('requester_id', Auth::user()->ic);
        $all_requests = DB::table('request_lists')->get();
        $req_list = json_decode(DB::table('request_lists')->get()->where('requester_id', Auth::user()->ic), true);
        foreach ($req_list as &$req_data) {
            $req_data['mat_name'] = DB::table('material_management__241022')->get()->where('material_id', $req_data['material_id'])->first()->material_name; 
        }

        // $r_id_count = array_count_values($req_list);
        // echo var_dump($r_id_count);
        return view('Dashboard', compact('req_list','all_requests'));
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

        $p_id = mb_substr($request['proj_id'][0], 0, 11); 

        // $query = $request->get();
        // echo count((array)$request['req_date']);
        
        for($i=0; $i<count((array)$request['req_date']); $i++)
        {
            RequestList::create(
                [
                    'request_id' => $r_id,
                    'requester_id' => $request['ic'][$i],
                    'date_requested' => $request['req_date'][$i],
                    'material_id' => $request['mat_id'][$i],
                    'project_id' => $p_id,
                    'q_taken' => $request['quantity'][$i],
                    'SK_approval' => false,
                ]
            );
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
        //
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