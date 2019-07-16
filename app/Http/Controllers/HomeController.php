<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Juventud;
use App\Programas;
use App\Dependencias;
use App\Carrusel;
use \App\Eventos;
use \App\Noticias;
use App\MenuEvento;
use App\MenuNoticias;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dependencia = Dependencias::all();
        $programas = Programas::all();
        $juventud = Juventud::all();
        $carrusel = Carrusel::find(1);
        $noticias = Noticias::all();
        $eventos = Eventos::all();
        $noti1 = MenuNoticias::find(1);
        $noti2 = MenuNoticias::find(2);
        $noti3 = MenuNoticias::find(3);
        $noti4 = MenuNoticias::find(4);
        $even1 = MenuEvento::find(1);
        $even2 = MenuEvento::find(2);
        $even3 = MenuEvento::find(3);
        return view('home',compact('dependencia'),compact("juventud","programas","carrusel","noti1","noti2","noti3","noti4","even1","even2","even3","eventos","noticias"));
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
