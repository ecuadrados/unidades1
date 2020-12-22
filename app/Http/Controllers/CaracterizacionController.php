<?php

namespace App\Http\Controllers;

use App\Caracterizacion;
use App\NucleoFamiliarCaracterizacion;
use App\Barrio;
use Illuminate\Http\Request;

class CaracterizacionController extends Controller
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
        // $request->user()->authorizeRoles(['user_habitante_calle','admin']); 
        $barrios = Barrio::all()->sortBy("nombre");;
        return view('caracterizacion.create',compact('barrios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $caracterizacion = new Caracterizacion();
        $caracterizacion->nombres = $request->nombre;
        $caracterizacion->apellidos = $request->apellido;
        $caracterizacion->tipo_documento = $request->tipo_documento;
        $caracterizacion->documento = $request->documento;
        $caracterizacion->edad = $request->edad;
        $caracterizacion->genero = $request->sexo;
        $caracterizacion->direccion = $request->direccion;
        $caracterizacion->barrio = $request->barrio;
        $caracterizacion->localidad = $request->localidad;
        $caracterizacion->estrato = $request->estrato;
        $caracterizacion->celular = $request->celular;
        $caracterizacion->otro_contacto = $request->otro_contacto;
        $caracterizacion->email = $request->email;
        $caracterizacion->estado_civil = $request->estado_civil;
        $caracterizacion->condiciones_vivienda = $request->condicion_vivienda;
        $caracterizacion->tipo_vivienda = $request->tipo_vivienda;
        $caracterizacion->cuantos_cuartos = $request->Numero_Cuartos;
        $caracterizacion->cuantos_hogares = $request->Numero_Hogares;
        $caracterizacion->servicio_publico = $request->Servicio_Publico;
        $caracterizacion->agua = $request->Agua;
        $caracterizacion->electricidad = $request->Elictricidad;
        $caracterizacion->gas = $request->Gas;
        $caracterizacion->alcantarillado = $request->Alcantarillado;
        $caracterizacion->internet = $request->Internet;
        $caracterizacion->etnia = $request->Etnia;
        $caracterizacion->persona_discapacidad = $request->persona_discapacidad;
        $caracterizacion->victima_conflicto = $request->victimas_conflicto;
        $caracterizacion->joven_riesgo = $request->joven_riesgo;
        $caracterizacion->madre_cabeza = $request->madre_cabeza;
        $caracterizacion->migrante_venezolano = $request->migrante_venezolano;
        $caracterizacion->certificado_permanencia = $request->certificado_permanencia;
        $caracterizacion->nivel_academico = $request->escolaridad;
        $caracterizacion->programa_salud = $request->Programa_Salud;
        $caracterizacion->nombre_eps = $request->Nombre_Eps;
        $caracterizacion->sisben = $request->Sisben;
        $caracterizacion->puntaje_sisben = $request->Puntaje_sisben;
        $caracterizacion->personas_cargo = $request->Personas_a_Cargo;
        $caracterizacion->cuantas_persona = $request->Cuantas_personas;
        $caracterizacion->niños_escolaridad = $request->Niño_Escolaridad;
        $caracterizacion->situacion_calle = $request->Situacion_Calle;
        $caracterizacion->consume_sustancia = $request->consume_sustancia;
        $caracterizacion->violencia_intrafamiliar = $request->Violencia_Intrafamiliar;
        $caracterizacion->pertenece_organizacion = $request->pertenece_organizacion;
        $caracterizacion->empleado = $request->Empleado;
        $caracterizacion->desempleado = $request->Desempleado;
        $caracterizacion->trabajador_independiente = $request->Trabajador_independiente;
        $caracterizacion->informal = $request->Informal;
        $caracterizacion->formal = $request->Formal;
        $caracterizacion->ideas_negocios = $request->idea_negocio;
        $caracterizacion->cual_idea = $request->Cual_idea;
        $caracterizacion->emprendimiento = $request->Emprendimiento;
        $caracterizacion->fortalecimiento = $request->Fortalecimiento;
        $caracterizacion->programa_gubernamental = $request->Gubernamental;
        $caracterizacion->observaciones = $request->observacion;        
        $caracterizacion->fecha_encuesta = $request->fecha_encuesta;
        $caracterizacion->ref_id = $request->numero_encuesta;
        $caracterizacion->save();
        $datos_nucleo_familiar =  json_decode($request->datos_nucleo_familiar);
        if($datos_nucleo_familiar !== null) {
            for($i=0; $i<count($datos_nucleo_familiar); $i++) {
                $nucleoFamiliar = new NucleoFamiliarCaracterizacion();
                $nucleoFamiliar->nombre_apellido = $datos_nucleo_familiar[$i]->nombre_completo;
                $nucleoFamiliar->documento = $datos_nucleo_familiar[$i]->documento;
                $nucleoFamiliar->tipo_documento = $datos_nucleo_familiar[$i]->tipo_documento;
                $nucleoFamiliar->eps = $datos_nucleo_familiar[$i]->eps;
                $nucleoFamiliar->regimen = $datos_nucleo_familiar[$i]->regimen;
                $nucleoFamiliar->sisben = $datos_nucleo_familiar[$i]->sisben;
                $nucleoFamiliar->E = $datos_nucleo_familiar[$i]->E;
                $nucleoFamiliar->GP = $datos_nucleo_familiar[$i]->GP;
                $nucleoFamiliar->SV = $datos_nucleo_familiar[$i]->SV;
                $nucleoFamiliar->NA = $datos_nucleo_familiar[$i]->NA;
                $nucleoFamiliar->edad = $datos_nucleo_familiar[$i]->edad;
                $nucleoFamiliar->genero = $datos_nucleo_familiar[$i]->sexo;
                $nucleoFamiliar->parentesco = $datos_nucleo_familiar[$i]->parentesco;
                $nucleoFamiliar->caracterizacion_id = $caracterizacion->id;
                $nucleoFamiliar->save();
            }  
        }

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
