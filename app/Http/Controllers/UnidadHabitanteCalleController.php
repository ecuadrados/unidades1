<?php

namespace App\Http\Controllers;

use App\Unidad_Habitante_Calle;
use App\PoblacionHC;
use App\Barrio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $habitantes = Unidad_Habitante_Calle::all();

        return view('unidad_habitante_calle.index',compact('habitantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['user_habitante_calle','admin']); 
        $barrios = Barrio::all()->sortBy("nombre");
        return view('unidad_habitante_calle.create',compact('barrios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /** */
        // $messages = [
        //     'documento.unique' => 'Este número de cedula ya esta registrado',
        // ];
        // $validator = Validator::make($request->all(), [
        //     'documento' => 'required|unique:unidad__habitante__calles',
           
        // ],$messages );

        // if ($validator->fails()) {
        //     $errors = $validator->errors()->all();
        //     return redirect('unidadhabitantecalle/create')
        //                 ->withErrors($errors)
        //                 ->withInput();
        // }
       
        /** */
        $request->user()->authorizeRoles(['user_habitante_calle','admin']); 
        $unidadHabitanteCalle = new Unidad_Habitante_Calle();
        $unidadHabitanteCalle->fecha_aplicacion = $request->fecha_aplicacion;
        $unidadHabitanteCalle->zona = $request->zona;
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

        $unidadHabitanteCalle->mentales =  $request->has('mentales') ? true : false;
        $unidadHabitanteCalle->sustancias_psicoactivas =  $request->has('sustancias_psicoactivas') ? true : false;
        $unidadHabitanteCalle->enfermedades_fisicas =  $request->has('enfermedades_fisicas') ? true : false;
        $unidadHabitanteCalle->problemas_familiares =  $request->has('problemas_familiares') ? true : false;
        $unidadHabitanteCalle->cuales_problemas_familiares =  $request->cuales_problemas_familiares;

        $unidadHabitanteCalle->ingreso_mensual =  $request->ingreso_mensual;
        $unidadHabitanteCalle->observaciones_economicas =  $request->observaciones_economicas;
        $unidadHabitanteCalle->aspecto_social =  $request->aspecto_social;
        $unidadHabitanteCalle->etnia =  $request->etnia;
        $unidadHabitanteCalle->discapacidad =  $request->discapacidad;
        $unidadHabitanteCalle->orientacion_sexual =  $request->orientacion_sexual;
        $unidadHabitanteCalle->observaciones_generales =  $request->observaciones_generales;


        $unidadHabitanteCalle->save();

        // Guardar datos de grupo familiar

        $datos_poblacion =  json_decode($request->datos_poblacion_familiar);
        if( $datos_poblacion != null) {
            for($i=0; $i< count($datos_poblacion); $i++) {
                $poblacion = new PoblacionHC();
                $poblacion->nombre_apellido = $datos_poblacion[$i]->nombres_completos_familiar;
                $poblacion->edad = $datos_poblacion[$i]->edad_familiar;            
                $poblacion->ocupacion = $datos_poblacion[$i]->ocupacion_familiar;
                $poblacion->grado_escolaridad = $datos_poblacion[$i]->escolaridad_familiar;
                $poblacion->parentesco = $datos_poblacion[$i]->parentesco_familiar;
                $poblacion->otro_parentesco = $datos_poblacion[$i]->otro_parentesco;
                $poblacion->habitante_calle_id = $unidadHabitanteCalle->id;  
                $poblacion->save();
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
        $habitante = Unidad_Habitante_Calle::findOrFail($id);
        $habitantes_familiar = PoblacionHC::where('habitante_calle_id',$id)->get();
        return view('unidad_habitante_calle.show', compact('habitante','habitantes_familiar'));
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
