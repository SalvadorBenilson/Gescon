<?php

namespace App\Http\Controllers;

use App\Models\Residencia;
use App\Http\Requests\StoreResidenciaRequest;
use App\Http\Requests\UpdateResidenciaRequest;

class ResidenciaController extends Controller
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
     * @param  \App\Http\Requests\StoreResidenciaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResidenciaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Residencia  $residencia
     * @return \Illuminate\Http\Response
     */
    public function show(Residencia $residencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Residencia  $residencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Residencia $residencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateResidenciaRequest  $request
     * @param  \App\Models\Residencia  $residencia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResidenciaRequest $request, Residencia $residencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Residencia  $residencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Residencia $residencia)
    {
        //
    }
}
