<?php

namespace App\Http\Controllers;

use App\Actividad;
use App\Meta;
use App\Poblacion;
use Illuminate\Http\Request;

class MetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meta = Meta::all();

        return view('meta.index',compact('meta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('meta.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $meta = new Meta();
        $meta->nombre = $request->nombre;
        $meta->valor = $request->valor;
        $meta->meta_sugerida = $request->meta_sugerida;
        $meta->programa = $request->programa;
        $meta->observacion = $request->observacion;        
        // $meta->fecha_meta = $request->fecha_meta;       

        $meta->save();

        return redirect()->route('meta.index');
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
        $meta = Meta::findOrFail($id);
        $actividad = Actividad::where('meta_id','=',$id)->get();
        $sumPoblacion = 0;
        for($i = 0; $i < count($actividad); $i++) {
            $poblacion = Poblacion::where('actividad_id','=',$actividad[$i]->id)->get();
            $sumPoblacion = $sumPoblacion + count($poblacion);
        }
        return view('meta.detalle', compact('meta','actividad','sumPoblacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meta = Meta::findOrFail($id);
        // return $meta;
        return view('meta.actualizar', compact('meta'));
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
        $meta = Meta::findOrFail($id);
        $meta->nombre = $request->nombre;
        $meta->valor = $request->valor;
        $meta->meta_sugerida = $request->meta_sugerida;
        $meta->programa = $request->programa;
        $meta->observacion = $request->observacion;        
        $meta->save();

        return redirect()->route('meta.index');
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
