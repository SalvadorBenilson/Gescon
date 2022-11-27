<?php

namespace App\Http\Controllers;

use App\Models\Autorizacao;
use App\Http\Requests\StoreAutorizacaoRequest;
use App\Http\Requests\UpdateAutorizacaoRequest;

class AutorizacaoController extends Controller
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
     * @param  \App\Http\Requests\StoreAutorizacaoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAutorizacaoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autorizacao  $autorizacao
     * @return \Illuminate\Http\Response
     */
    public function show(Autorizacao $autorizacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autorizacao  $autorizacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Autorizacao $autorizacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAutorizacaoRequest  $request
     * @param  \App\Models\Autorizacao  $autorizacao
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAutorizacaoRequest $request, Autorizacao $autorizacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autorizacao  $autorizacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autorizacao $autorizacao)
    {
        //
    }
}
