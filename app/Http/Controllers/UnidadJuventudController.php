<?php

namespace App\Http\Controllers;

use App\Unidad_Juventud;
use Illuminate\Http\Request;

class UnidadJuventudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user_juventud','admin']); 
        return view('unidad_juventud.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['user_juventud','admin']); 
        return view('unidad_juventud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['user_juventud','admin']); 
        $unidadJuventud = new Unidad_Juventud();
        $unidadJuventud->nombre = $request->nombre;
        $unidadJuventud->tipo_documento = $request->tipo_documento;
        $unidadJuventud->documento = $request->documento;
        $unidadJuventud->fecha_nacimiento = $request->fecha_nacimiento;
        $unidadJuventud->edad = $request->edad;
        $unidadJuventud->direccion = $request->direccion;
        $unidadJuventud->telefono = $request->telefono;
        $unidadJuventud->save();
        return redirect()->route('unidadjuventud.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
