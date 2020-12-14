<?php

namespace App\Http\Controllers;

use App\Centro_Vida;
use App\Unidad_General;
use App\kit;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UnidadGeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user_kit','admin']); 

        // $unidad_general = Unidad_General::all();
        // $centro_vida = DB::table('unidad__generals')
        //         ->select('centro_vida_id','general_centro_vida')
        //         ->distinct('general_centro_vida')
        //         ->get();
        $centro_vida = Centro_Vida::all();
                
        return view('unidad_general.index',compact('centro_vida'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['user_kit','admin']); 
        $centroVida = Centro_Vida::all()->sortBy("nombre");;
        return view('unidad_general.create',compact('centroVida'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['user_kit','admin']); 
        $unidadGeneral = new Unidad_General();
        $unidadGeneral->general_nombre = $request->general_nombre;
        $unidadGeneral->general_apellidos = $request->general_apellidos;
        $unidadGeneral->general_tipo_documento = $request->general_tipo_documento;
        $unidadGeneral->general_documento = $request->general_documento;
        $unidadGeneral->general_fecha_nacimiento = $request->general_fecha_nacimiento;
        $unidadGeneral->general_direccion = $request->general_direccion;
        $unidadGeneral->general_telefono = $request->general_telefono;
        $unidadGeneral->general_nombre_acudiente = $request->general_nombre_acudiente;
        $unidadGeneral->general_documento_acudiente = $request->general_documento_acudiente;        
        $unidadGeneral->centro_vida_id = $request->general_centro_vida;
        $unidadGeneral->save();
        return redirect()->route('unidadgeneral.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $request->user()->authorizeRoles(['user_kit','admin']); 
        $unidad_general = Unidad_General::findOrFail($id);
        $kit = Kit::all()->sortBy("nombre");;
        
        return view('unidad_general.detalle', compact('unidad_general'));
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ver(Request $request, $id)
    {
        $request->user()->authorizeRoles(['user_kit','admin']); 
        $unidad_general = Unidad_General::findOrFail($id);
        $kit = Kit::where('general_id', '=', $id)->get();
       
        return view('unidad_general.show', compact('unidad_general','kit'));
    }

    public function lista(Request $request, $centro)
    {
        $request->user()->authorizeRoles(['user_kit','admin']); 
        // $usuarios = Unidad_General::where('general_centro_vida','like',$centro.'%')->get();
        $usuarios = Unidad_General::where('centro_vida_id','=',$centro)->get();
        return view('unidad_general.lista', compact('usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $request->user()->authorizeRoles(['user_kit','admin']); 
        $usuario = Unidad_General::findOrFail($id);
        $centroVida = Centro_Vida::all()->sortBy("nombre");;


        return view('unidad_general.editar', compact('usuario','centroVida'));
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
        $request->user()->authorizeRoles(['user_kit','admin']); 
        $usuario = Unidad_General::find($id);
        $usuario->general_nombre = $request->general_nombre;
        $usuario->general_apellidos = $request->general_apellidos;
        $usuario->general_tipo_documento = $request->general_tipo_documento;
        $usuario->general_documento = $request->general_documento;
        $usuario->general_fecha_nacimiento = $request->general_fecha_nacimiento;
        $usuario->general_direccion = $request->general_direccion;
        $usuario->general_telefono = $request->general_telefono;
        $usuario->general_nombre_acudiente = $request->general_nombre_acudiente;
        $usuario->general_documento_acudiente = $request->general_documento_acudiente;        
        $usuario->centro_vida_id = $request->general_centro_vida;
        $usuario->save();

        return redirect()->route('unidadgeneral.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $request->user()->authorizeRoles(['user_kit','admin']); 
        $usuariocontratista = Unidad_General::findOrFail($id);
        $usuariocontratista->delete();

        return back()->with('mensaje', 'Usuario Eliminado');
    }   
}
