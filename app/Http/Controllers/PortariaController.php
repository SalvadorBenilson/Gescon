<?php

namespace App\Http\Controllers;

use App\Models\Portaria;
use App\Http\Requests\StorePortariaRequest;
use App\Http\Requests\UpdatePortariaRequest;

class PortariaController extends Controller
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
     * @param  \App\Http\Requests\StorePortariaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortariaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portaria  $portaria
     * @return \Illuminate\Http\Response
     */
    public function show(Portaria $portaria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portaria  $portaria
     * @return \Illuminate\Http\Response
     */
    public function edit(Portaria $portaria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePortariaRequest  $request
     * @param  \App\Models\Portaria  $portaria
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortariaRequest $request, Portaria $portaria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portaria  $portaria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portaria $portaria)
    {
        //
    }
}
