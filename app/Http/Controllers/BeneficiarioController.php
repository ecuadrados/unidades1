<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beneficiario;


class BeneficiarioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('beneficiario.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        return view('beneficiario.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $beneficiario = new Beneficiario();
        $beneficiario->beneficiario_nombre = $request->beneficiario_nombre;
        $beneficiario->beneficiario_tipo_documento = $request->beneficiario_tipo_documento;
        $beneficiario->beneficiario_documento = $request->beneficiario_documento;
        $beneficiario->beneficiario_fecha_nacimiento = $request->beneficiario_fecha_nacimiento;
        $beneficiario->beneficiario_edad = $request->beneficiario_edad;
        $beneficiario->beneficiario_direccion = $request->beneficiario_direccion;
        $beneficiario->beneficiario_telefono = $request->beneficiario_telefono;
        $beneficiario->save();
        return redirect()->route('beneficiario.index');
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
