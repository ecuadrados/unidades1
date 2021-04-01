<?php

namespace App\Http\Controllers;

use App\Actividad;
use App\Meta;
use App\Poblacion;
use Illuminate\Http\Request;

class EstadisticaController extends Controller
{
    public function meta()
    {
        $poblacion = count(Poblacion::all());
        $meta = count(Meta::all());
        $actividad = count(Actividad::all());       
        $SumaMetaSugerida = Meta::all()->sum('meta_sugerida');
        $cantFemenino = count(Poblacion::where('sexo','Femenino')->get());
        $cantMasculino = count(Poblacion::where('sexo','Masculino')->get());
        $cantVictima = count(Poblacion::where('victima',true)->get());
        $cantDiscapacidad = count(Poblacion::where('discapacidad',true)->get());

        $unidad_comunera = Poblacion::selectRaw(
            'unidad_comunera, sum(sexo="Femenino") as cantFemenino, 
             sum(sexo="Masculino") as cantMasculino,
             sum(edad >= 0 and edad <=5) as cantEdad05,             
             sum(edad >= 6 and edad <=12) as cantEdad612,             
             sum(edad >= 13 and edad <=17) as cantEdad1317,             
             sum(edad >= 18) as cantEdad18,             
             sum(etnia="Afro") as cantAfro,           
             sum(etnia="Mestizo") as cantMestizo,           
             sum(etnia="Indigena") as cantIndigena,           
             sum(etnia="Otro") as cantOtro,          
             sum(victima) as cantVictima,          
             sum(discapacidad) as cantDiscapacidad                  
             ')
            ->groupBy('unidad_comunera')
            ->get();

        $unidad_comunera_general = Poblacion::selectRaw(
                'etnia as country, count(etnia) as litres')  
                ->groupBy('etnia')             
                ->get();

        $unidad_comunera_general2 = Poblacion::selectRaw
            (
                'sum(etnia="Afro") as cantAfro,           
                 sum(etnia="Mestizo") as cantMestizo,           
                 sum(etnia="Indigena") as cantIndigena,           
                 sum(etnia="Otro") as cantOtro'
            )           
            ->get();
        $unidad_comunera_edad = Poblacion::selectRaw(
            '   sum(edad >= 0 and edad <=5) as cantEdad05,             
                sum(edad >= 6 and edad <=12) as cantEdad612,             
                sum(edad >= 13 and edad <=17) as cantEdad1317,             
                sum(edad >= 18) as cantEdad18                         
            ')
            ->get();

            $poblacion_meta = Poblacion::join('actividad_infancia', 'actividad_infancia.id', '=', 'poblacion_infancia.actividad_id')
            ->join('meta_infacia', 'meta_infacia.id', '=' , 'actividad_infancia.meta_id')
            ->selectRaw(
                'actividad_infancia.meta_id, 
                meta_infacia.nombre,
                meta_infacia.valor,
                meta_infacia.meta_sugerida, 
                meta_infacia.programa, 
                count(actividad_infancia.meta_id) as cont')
            ->groupBy(
                'actividad_infancia.meta_id',
                'meta_infacia.nombre',
                'meta_infacia.valor',
                'meta_infacia.meta_sugerida', 
                'meta_infacia.programa'
                )
            ->get();
            // foreach($user as $us){
            //     // echo $us->meta_id;
            //     // echo $us->actividad->meta->valor;
            //     echo "US: ".$us->meta_id."<br/>";
            // }
            //     return $user;
        return view('estadistica.meta',compact(
            'poblacion','meta','SumaMetaSugerida','actividad','cantFemenino',
            'cantMasculino','cantVictima','cantDiscapacidad',
            'unidad_comunera','unidad_comunera_general',
            'unidad_comunera_general2','unidad_comunera_edad',
            'poblacion_meta'
        ));

    }
}
