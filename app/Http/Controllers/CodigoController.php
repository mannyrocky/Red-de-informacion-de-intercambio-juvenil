<?php

namespace App\Http\Controllers;
use \App\Codjoven;
use \App\Programas;
use \App\Juventud;
use \App\Dependencias;
use \App\Noticias;
use \App\Eventos;
use Illuminate\Http\Request;

class CodigoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dependencia = Dependencias::all();
        $juventud = Juventud::all();
        $programas = Programas::all();
        $noticias = Noticias::all();
        $eventos = Eventos::all();
        $codigo = Codjoven::find(1);
        return view('codigojoven.enterate',compact('codigo','dependencia','juventud','programas','noticias','eventos'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $codigo = Codjoven::find($id);
        $arreglo = array();
        $arreglo[0] = $codigo->id;
        $arreglo[1] = $codigo->titulocodigo;
        $arreglo[2] = $codigo->infointro;
        $arreglo[3] = $codigo->infodesa;
        $arreglo[4] = $codigo->infoconclu;
        $arreglo[5] = $codigo->codigourl;
        echo json_encode($arreglo);
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
