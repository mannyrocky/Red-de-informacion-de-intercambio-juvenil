<?php

namespace App\Http\Controllers;
use \App\Programas;
use \App\Dependencias;
use \App\Carrusel;
use \App\Juventud;
use \App\Eventos;
use \App\Noticias;
use Illuminate\Http\Request;

class GestorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programa = Programas::all();
        $dependencias = Dependencias::all();
        $juventudes = Juventud::all();
        $carrusel = Carrusel::find(1);
        $noti1 = Noticias::find(1);
        $noti2 = Noticias::find(2);
        $noti3 = Noticias::find(3);
        $noti4 = Noticias::find(4);
        $even1 = Eventos::find(1);
        $even2 = Eventos::find(3);
        $even3 = Eventos::find(2);
        $even4 = Eventos::find(4);
        return view('gestor.gestor',compact('dependencias'),compact('juventudes','programa',"carrusel","noti1","noti2","noti3","noti4","even1","even2","even3","even4"));
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
