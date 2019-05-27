<?php

namespace App\Http\Controllers;
use App\Carrusel;
use App\Juventud;
use App\Dependencias;
use App\Programas;
use Illuminate\Http\Request;

class CarruselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    public function edit(Request $request,$id)
    {
        $carru = Carrusel::find($id);
        $carru->imagen1 = $request->imagen1;
        $carru->urlimagen1 = $request->urlimagen1;
        $carru->imagen2 = $request->imagen2;
        $carru->urlimagen2 = $request->urlimagen2;
        $carru->imagen3 = $request->imagen3;
        $carru->urlimagen3 = $request->urlimagen3;
        $carru->imagen4 = $request->imagen4;
        $carru->urlimagen4 = $request->urlimagen4;
        $carru->imagen5 = $request->imagen5;
        $carru->urlimagen5 = $request->urlimagen5;
        $carru->save();
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
