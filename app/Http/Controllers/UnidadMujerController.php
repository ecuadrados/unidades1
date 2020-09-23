<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidad_Mujer;

class UnidadMujerController extends Controller
{

    // public function __construct(Request $request)
    // { 
    //     $request->user()->authorizeRoles(['user_mujer']); 
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $tipo_usuario= auth()->user()->type_user;
        $request->user()->authorizeRoles(['user_mujer','admin']); 
        return view('unidad_mujer.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['user_mujer','admin']); 
        return view('unidad_mujer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['user_mujer','admin']); 
        $unidadMujer = new Unidad_Mujer();
        $unidadMujer->nombre = $request->nombre;
        $unidadMujer->tipo_documento = $request->tipo_documento;
        $unidadMujer->documento = $request->documento;
        $unidadMujer->fecha_nacimiento = $request->fecha_nacimiento;
        $unidadMujer->edad = $request->edad;
        $unidadMujer->direccion = $request->direccion;
        $unidadMujer->telefono = $request->telefono;
        $unidadMujer->save();
        return redirect()->route('unidadmujer.index');
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
