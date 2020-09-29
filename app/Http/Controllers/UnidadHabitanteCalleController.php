<?php

namespace App\Http\Controllers;

use App\Unidad_Habitante_Calle;
use Illuminate\Http\Request;

class UnidadHabitanteCalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user_habitante_calle','admin']); 
        return view('unidad_habitante_calle.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['user_habitante_calle','admin']); 
        return view('unidad_habitante_calle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['user_habitante_calle','admin']); 
        $unidadHabitanteCalle = new Unidad_Habitante_Calle();
        $unidadHabitanteCalle->nombre = $request->nombre;
        $unidadHabitanteCalle->tipo_documento = $request->tipo_documento;
        $unidadHabitanteCalle->documento = $request->documento;
        $unidadHabitanteCalle->fecha_nacimiento = $request->fecha_nacimiento;
        $unidadHabitanteCalle->sexo = $request->sexo;
        $unidadHabitanteCalle->certificado_vecindad = $request->vecindad;
        $unidadHabitanteCalle->barrio = $request->barrio;
        $unidadHabitanteCalle->sector = $request->sector;
        $unidadHabitanteCalle->tiempo = $request->tiempo;
        $unidadHabitanteCalle->estado_civil = $request->estado_civil;
        $unidadHabitanteCalle->escolaridad = $request->escolaridad;
        $unidadHabitanteCalle->otra_escolaridad = $request->otra_escolaridad;
        $unidadHabitanteCalle->edad = $request->edad;
        $unidadHabitanteCalle->direccion = $request->direccion;
        $unidadHabitanteCalle->telefono = $request->telefono;
        $unidadHabitanteCalle->save();
        return redirect()->route('unidadhabitantecalle.index');
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
