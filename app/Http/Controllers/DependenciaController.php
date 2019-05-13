<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Dependencias;

class DependenciaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrar($id)
    {
        $dependencia = Dependencias::find($id);
        return view('dependencias.Dependencia')->with(compact('dependencia'));
    }

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
        //
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
    public function destroy($id)
    {
        //
    }
}
