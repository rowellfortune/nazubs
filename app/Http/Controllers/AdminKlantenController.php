<?php

namespace App\Http\Controllers;

use App\Klant;
use Illuminate\Http\Request;

class AdminKlantenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = Klant::all();
        return view('admin.klanten.index', compact('klanten'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.klanten.create', compact('klanten'));
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
     * @param  \App\Klant  $klant
     * @return \Illuminate\Http\Response
     */
    public function show(Klant $klant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Klant  $klant
     * @return \Illuminate\Http\Response
     */
    public function edit(Klant $klant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Klant  $klant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Klant $klant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Klant  $klant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Klant $klant)
    {
        //
    }
}
