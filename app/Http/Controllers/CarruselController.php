<?php

namespace App\Http\Controllers;
use App\Carrusel;
use App\Juventud;
use App\Dependencias;
use App\Programas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function actualizar(Request $request)
    {
        
        $carrusel = Carrusel::find(1);
        $data = $request->all();
        $imagen1 = $request->file('imagen1');
        $nombre1 =$imagen1->getClientOriginalName();
        $imagen2 = $request->file('imagen2');
        $nombre2 =$imagen2->getClientOriginalName();
        $imagen3 = $request->file('imagen3');
        $nombre3 =$imagen3->getClientOriginalName();
        $imagen4 = $request->file('imagen4');
        $nombre4 =$imagen4->getClientOriginalName();
        $imagen5 = $request->file('imagen5');
        $nombre5 =$imagen5->getClientOriginalName();
        $url1 = $_POST['urlimagen1'];
        $url2 = $_POST['urlimagen2'];
        $url3 = $_POST['urlimagen3'];
        $url4 = $_POST['urlimagen4'];
        $url5 = $_POST['urlimagen5'];
        $carrusel->imagen1 = $nombre1;
        $carrusel->urlimagen1 = $url1;
        $carrusel->imagen2 = $nombre2;
        $carrusel->urlimagen2 = $url2;
        $carrusel->imagen3 = $nombre3;
        $carrusel->urlimagen3 = $url3;
        $carrusel->imagen4 = $nombre4;
        $carrusel->urlimagen4 = $url4;
        $carrusel->imagen5 = $nombre5;
        $carrusel->urlimagen5 = $url5;
        $carrusel->save();
        Storage::put($nombre1, file_get_contents($imagen1));
        Storage::put($nombre2, file_get_contents($imagen2));
        Storage::put($nombre3, file_get_contents($imagen3));
        Storage::put($nombre4, file_get_contents($imagen4));
        Storage::put($nombre5, file_get_contents($imagen5));
        echo $url1." ".$url2." ".$url3." ".$url4." ".$url5;
    }
}
