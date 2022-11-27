<?php

namespace App\Http\Controllers;

use App\Models\Residente;
use App\Http\Requests\StoreResidenteRequest;
use App\Http\Requests\UpdateResidenteRequest;

class ResidenteController extends Controller
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
     * @param  \App\Http\Requests\StoreResidenteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResidenteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Residente  $residente
     * @return \Illuminate\Http\Response
     */
    public function show(Residente $residente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Residente  $residente
     * @return \Illuminate\Http\Response
     */
    public function edit(Residente $residente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateResidenteRequest  $request
     * @param  \App\Models\Residente  $residente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResidenteRequest $request, Residente $residente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Residente  $residente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Residente $residente)
    {
        //
    }
}
