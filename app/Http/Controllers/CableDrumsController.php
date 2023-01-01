<?php

namespace App\Http\Controllers;

use App\Models\CableDrums;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CableDrumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 

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
        DB::table('material')->insert(
            [
                'material_id' => $request->mat_id,
                'material_name' => $request->materialname,
                'quantity' => $request->qty
            ]
        );

        if ($request->type == "Cable"){
            DB::table('cables')->insert(
                [
                    'material_id' => $request->mat_id,
                    'material_name' => $request->materialname,
                    'drum_no' => $request->drum,
                    'balance' => $request->qty
                ]
            );
        }

        DB::table('additions')->insert(
            [
                'material_id' => $request->mat_id,
                'drum_no' => $request->drum,
                'quantity' => $request->qty,
                'date_added' => date("j\/n\/Y")
            ]
        );

        print_r($request->type);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CableDrums  $cableDrums
     * @return \Illuminate\Http\Response
     */
    public function show(CableDrums $cableDrums)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CableDrums  $cableDrums
     * @return \Illuminate\Http\Response
     */
    public function edit(CableDrums $cableDrums)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CableDrums  $cableDrums
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CableDrums $cableDrums)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CableDrums  $cableDrums
     * @return \Illuminate\Http\Response
     */
    public function destroy(CableDrums $cableDrums)
    {
        //
    }
}