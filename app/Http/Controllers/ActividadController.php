<?php

namespace App\Http\Controllers;

use App\Actividad;
use App\ConsolidadoPoblacion;
use App\Poblacion;
use App\Barrio;
use Illuminate\Http\Request;

class ActividadController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actividad = new Actividad();
        $actividad->nombre = $request->nombre;
        $actividad->meta_id = $request->meta_id;
        $actividad->save();
        
        return back();
        // return redirect()->route('meta.index');
    }

    public function poblacion(Request $request)
    {
        $consolidado_poblacion = new ConsolidadoPoblacion();
        $consolidado_poblacion->actividad_id = $request->actividad_id;
        $consolidado_poblacion->programa = 1;
        $consolidado_poblacion->poblacion_objeto = $request->poblacion_objeto;
        $consolidado_poblacion->organizacion_actividad = $request->organizacion_actividad;
        $consolidado_poblacion->lugar_actividad = $request->lugar_actividad;
        $consolidado_poblacion->fecha_actividad = $request->fecha_actividad;
        $consolidado_poblacion->barrio = $request->barrio;
        $consolidado_poblacion->ludoteca = $request->ludoteca;        
        // $meta->fecha_meta = $request->fecha_meta;       
        $consolidado_poblacion->save();
        $datos_poblacion =  json_decode($request->datos_poblacion);
        
        $cantFemenino = 0;
        $cantMasculino = 0;
        $edad1 = 0; $edad2 = 0; $edad3 = 0; $edad4 = 0;
        $afro = 0; $mestizo = 0; $indigena = 0; $otro = 0;
        $victima = 0;  $discapacidad = 0;
        for($i=0; $i< count($datos_poblacion); $i++) {
            $poblacion = new Poblacion();
            $poblacion->nombres_completos = $datos_poblacion[$i]->nombre_completo;
            $poblacion->sexo = $datos_poblacion[$i]->sexo;            
            $poblacion->documento = $datos_poblacion[$i]->documento;
            $poblacion->edad = $datos_poblacion[$i]->edad;
            $poblacion->etnia = $datos_poblacion[$i]->etnia;
            $poblacion->inclusion = $datos_poblacion[$i]->inclusion;
            $poblacion->organizacion_proyecto = $datos_poblacion[$i]->organizado_proyecto;
            $poblacion->telefono = $datos_poblacion[$i]->telefono;
            $poblacion->celular = $datos_poblacion[$i]->celular;
            $poblacion->victima = $datos_poblacion[$i]->victima;
            $poblacion->discapacidad = $datos_poblacion[$i]->discapacidad;
            $poblacion->nombre_funcionario = $datos_poblacion[$i]->funcionario;
            $poblacion->actividad_id = $request->actividad_id;            
            $poblacion->consolidado_id = $consolidado_poblacion->id;  
            // calcular datos
            if($poblacion->sexo == "Femenino" ) {
                $cantFemenino++;
            } else {
                $cantMasculino++;
            }
            if($poblacion->edad >= 0 && $poblacion->edad <= 5) {
                $edad1++;
            } else
            if($poblacion->edad >= 6 && $poblacion->edad <= 12) {
                $edad2++;
            } else
            if($poblacion->edad >= 13 && $poblacion->edad <= 17) {
                $edad3++;
            } else {
                $edad4++;
            }
            if($poblacion->etnia == "Afro") {
                $afro++;
            } else if($poblacion->etnia == "Mestizo") {
                $mestizo++;
            } else if($poblacion->etnia == "Indigena") {
                $indigena++;
            } else {
                $otro++;
            }
            if($poblacion->victima) {
                $victima++;
            }
            if($poblacion->discapacidad) {
                $discapacidad++;
            }
            $poblacion->save();
        }

        $consolidado_actualizar = ConsolidadoPoblacion::findOrFail($consolidado_poblacion->id);
        $consolidado_actualizar->total_beneficiarios = count($datos_poblacion);
        $consolidado_actualizar->beneficiario_mujer = $cantFemenino;
        $consolidado_actualizar->beneficiario_hombre = $cantMasculino;
        $consolidado_actualizar->edades_0_5 = $edad1;
        $consolidado_actualizar->edades_6_12 = $edad2;
        $consolidado_actualizar->edades_13_17 = $edad3;
        $consolidado_actualizar->adulto = $edad4;
        $consolidado_actualizar->adulto = $edad4;
        $consolidado_actualizar->victima = $victima;
        $consolidado_actualizar->afro = $afro;
        $consolidado_actualizar->mestizo = $mestizo;
        $consolidado_actualizar->indigena = $indigena;
        $consolidado_actualizar->otro = $otro;
        $consolidado_actualizar->persona_discapacidad = $discapacidad;
        $consolidado_actualizar->save();
        // realiza calculos y guarda los datos en consolidado poblacion
        // $collection_sexo = Poblacion::groupBy('sexo')
        // ->selectRaw('count(sexo),count(etnia) as cantidad, sexo')
        // ->where('consolidado_id','=',3)
        // ->get();

        // $collection_etnia = Poblacion::groupBy('etnia')
        // ->selectRaw('count(etnia) as cantidad, etnia')
        // ->where('consolidado_id','=',3)
        // ->get();

        // $collection_etnia = Poblacion::groupBy('etnia')
        // ->selectRaw('count(etnia) as cantidad, etnia')
        // ->where('consolidado_id','=',3)
        // ->get();

        // return  $collection_etnia;
                
        return redirect()->route('meta.index');
    }

    public function verpoblacion($id)
    {
        $consolidado = ConsolidadoPoblacion::where('actividad_id','=',$id)->get();
        $poblacion = Poblacion::where('actividad_id','=',$id)->get();           
        return view('actividad.poblacion',compact('consolidado','poblacion'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $request->user()->authorizeRoles(['user_kit','admin']); 
        // $meta = Meta::findOrFail($id);
        // $actividad = Actividad::where('meta_id','=',$id)->get();
        $actividad = Actividad::findOrFail($id);
        $barrios = Barrio::all()->sortBy("nombre");;
        return view('actividad.detalle',compact('actividad','barrios'));
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
        $actividad = Actividad::findOrFail($id);
        $actividad->delete();

        return back()->with('mensaje', 'Actividad Eliminado');
    }
}
