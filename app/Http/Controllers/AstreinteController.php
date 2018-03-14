<?php

namespace App\Http\Controllers;

use App\Astreinte;
use App\User;
use Illuminate\Http\Request;

class AstreinteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $astreintes = Astreinte::all();
        $astreintes = Astreinte::with('username')->get();
        return view('astreintes.liste-des-astreintes',compact('astreintes'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Astreinte  $astreinte
     * @return \Illuminate\Http\Response
     */
    public function show(Astreinte $astreinte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Astreinte  $astreinte
     * @return \Illuminate\Http\Response
     */
    public function edit(Astreinte $astreinte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Astreinte  $astreinte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Astreinte $astreinte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Astreinte  $astreinte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Astreinte $astreinte)
    {
        //
    }
}
