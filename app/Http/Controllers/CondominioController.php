<?php

namespace App\Http\Controllers;

use App\Models\Condominio;
use App\Http\Requests\StoreCondominioRequest;
use App\Http\Requests\UpdateCondominioRequest;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class CondominioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuario = Auth::user()->id;
        $condominios = Condominio::where('usuario_id', 'like', '%'.$usuario.'%')
        ->with('user:id,name')
        ->lastet
        ->get();
        return Inertia::render('Condominio/Index', ['condominios' => $condominios]);
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
     * @param  \App\Http\Requests\StoreCondominioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCondominioRequest $request)
    {
        //
        Condominio::create($request->all());
        return redirect()->route('condominio.index')->with('message', 'Perfil de condominio criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Condominio  $condominio
     * @return \Illuminate\Http\Response
     */
    public function show(Condominio $condominio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Condominio  $condominio
     * @return \Illuminate\Http\Response
     */
    public function edit(Condominio $condominio)
    {
        //
        return Inertia::render('Condominio/Edit', ['condominio' => $condominio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCondominioRequest  $request
     * @param  \App\Models\Condominio  $condominio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCondominioRequest $request, Condominio $condominio)
    {
        //
        $this->authorize('update', $condominio);

        $validated = $request->validate();
        $condominio->update($validated);
        return redirect()->route('condominio.index')->with('message', 'Perfil de condominio actualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Condominio  $condominio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Condominio $condominio)
    {
        //
        $this->authorize('delete', $condominio);
        $condominio->delete();
        return redirect()->route('condominio.show')->with('message', 'Perfil de condominio apagado com sucesso');
    }
}
