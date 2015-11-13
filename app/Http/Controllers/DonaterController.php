<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Donater;
use App\Community;

class DonaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donaters = Donater::all();
        return $donaters;
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
        $donater = new Donater;
        $donater ->community_id = $request ->community_id;
        $donater ->name = $request ->name;
        $donater ->contact = $request ->contact;
        $donater ->city = $request ->city;
        $donater ->address = $request ->address;
        $donater ->save();
        return $donater;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donater = Donater::find($id);
        // dd($donater);
        // return $donater->community;
        return $donater->communities;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Donater::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $donater = Donater::find($id);
        $donater -> community_id = $request -> community_id;
        $donater -> name = $request -> name;
        $donater -> contact = $request -> contact;
        $donater -> city = $request -> city;
        $donater -> address = $request -> address;
        $donater -> save();
        return $donater;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donater = Donater::find($id);

        return $donater;
    }
}
