<?php

namespace App\Http\Controllers;
use \App\Programas;
use \App\Dependencias;
use \App\Carrusel;
use \App\Juventud;
use \App\Eventos;
use \App\Noticias;
use \App\MenuEvento;
use \App\MenuNoticias;
use Illuminate\Http\Request;

class GestorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        $noticias = Noticias::all();
        $eventos = Eventos::all();
        $noti1 = MenuNoticias::find(1);
        $noti2 = MenuNoticias::find(2);
        $noti3 = MenuNoticias::find(3);
        $noti4 = MenuNoticias::find(4);
        $even1 = MenuEvento::find(1);
        $even2 = MenuEvento::find(2);
        $even3 = MenuEvento::find(3);
        return view('gestor.gestor',compact('dependencias'),compact('juventudes','programa',"carrusel","noti1","noti2","noti3","noti4","even1","even2","even3","even4","eventos","noticias"));
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
