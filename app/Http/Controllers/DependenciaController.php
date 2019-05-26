<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Dependencias;
use \App\Juventud;
use \App\Programas;

class DependenciaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Dependencias;
        $usuario->nombredep = $request->nombredep;
        $usuario->director = $request->director;
        $usuario->descripciondep = $request->descripciondep;
        $usuario->url = $request->url;
        $usuario->imagendep = $request->imagendep;
        $usuario->save();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $juventud = Juventud::all();
        $dependencia = Dependencias::all();
        $programas = Programas::all();
        $valor = Dependencias::find($id);
        //dd($dependencia->id);
        return view('dependencias.Dependencia',compact('dependencia','valor','juventud','programas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $usuario = Dependencias::find($id);
        $usuario->nombredep = $request->nombredep;
        $usuario->director = $request->director;
        $usuario->descripciondep = $request->descripciondep;
        $usuario->url = $request->url;
        $usuario->imagendep = $request->imagendep;
        $usuario->save();

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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function borrar($id,$nomdep)
    {
        Dependencias::destroy($id);
        $programas = Programas::all();
        $programas = Programas::find($nomdep);
        $programas->destroy($nomdep);
    }
}
