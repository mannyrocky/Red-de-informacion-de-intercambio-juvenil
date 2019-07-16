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
        $dato = $request->imagenselecciona;
        if($dato == "Imagen1"){
            if(isset($_POST['imagen1'])){
                $titsite1 = $request->titsite1;
                $url1 = $request->urlimagen1;
                $carrusel->imagen1 = $carrusel->imagen1;
                $carrusel->urlimagen1 = $url1;
                $carrusel->titsite1 = $titsite1;
                $carrusel->save();
                echo "Carrusel editado correctamente";
            }else{
                $imagen = $request->file('imagen1');
                $nombre =$imagen->getClientOriginalName();
                $titsite1 = $request->titsite1;
                $url1 = $request->urlimagen1;
                $carrusel->imagen1 = $nombre;
                $carrusel->urlimagen1 = $url1;
                $carrusel->titsite1 = $titsite1;
                $carrusel->save();
                Storage::put($nombre, file_get_contents($imagen));
                echo "Carrusel editado correctamente";
            }
        }elseif($dato == "Imagen2"){
            if(isset($_POST['imagen1'])){
                $titsite1 = $request->titsite1;
                $url1 = $request->urlimagen1;
                $carrusel->imagen2 = $carrusel->imagen2;
                $carrusel->urlimagen2 = $url1;
                $carrusel->titsite2 = $titsite1;
                $carrusel->save();
                echo "Carrusel editado correctamente";
            }else{
                $imagen = $request->file('imagen1');
                $nombre =$imagen->getClientOriginalName();
                $titsite1 = $request->titsite1;
                $url1 = $request->urlimagen1;
                $carrusel->imagen2 = $nombre;
                $carrusel->urlimagen2 = $url1;
                $carrusel->titsite2 = $titsite1;
                $carrusel->save();
                Storage::put($nombre, file_get_contents($imagen));
                echo "Carrusel editado correctamente";
            }
        }elseif($dato == "Imagen3"){
            if(isset($_POST['imagen1'])){
                $titsite1 = $request->titsite1;
                $url1 = $request->urlimagen1;
                $carrusel->imagen3 = $carrusel->imagen3;
                $carrusel->urlimagen3 = $url1;
                $carrusel->titsite3 = $titsite1;
                $carrusel->save();
                echo "Carrusel editado correctamente";
            }else{
                $imagen = $request->file('imagen1');
                $nombre =$imagen->getClientOriginalName();
                $titsite1 = $request->titsite1;
                $url1 = $request->urlimagen1;
                $carrusel->imagen3 = $nombre;
                $carrusel->urlimagen3 = $url1;
                $carrusel->titsite3 = $titsite1;
                $carrusel->save();
                Storage::put($nombre, file_get_contents($imagen));
                echo "Carrusel editado correctamente";
            }
        }elseif($dato == "Imagen4"){
            if(isset($_POST['imagen1'])){
                $titsite1 = $request->titsite1;
                $url1 = $request->urlimagen1;
                $carrusel->imagen4 = $carrusel->imagen4;
                $carrusel->urlimagen4 = $url1;
                $carrusel->titsite4 = $titsite1;
                $carrusel->save();
                echo "Carrusel editado correctamente";
            }else{
                $imagen = $request->file('imagen1');
                $nombre =$imagen->getClientOriginalName();
                $titsite1 = $request->titsite1;
                $url1 = $request->urlimagen1;
                $carrusel->imagen4 = $nombre;
                $carrusel->urlimagen4 = $url1;
                $carrusel->titsite4 = $titsite1;
                $carrusel->save();
                Storage::put($nombre, file_get_contents($imagen));
                echo "Carrusel editado correctamente";
            }
        }else{
            if(isset($_POST['imagen1'])){
                $titsite1 = $request->titsite1;
                $url1 = $request->urlimagen1;
                $carrusel->imagen5 = $carrusel->imagen5;
                $carrusel->urlimagen5 = $url1;
                $carrusel->titsite5 = $titsite1;
                $carrusel->save();
                echo "Carrusel editado correctamente";
            }else{
                $imagen = $request->file('imagen1');
                $nombre =$imagen->getClientOriginalName();
                $titsite1 = $request->titsite1;
                $url1 = $request->urlimagen1;
                $carrusel->imagen5 = $nombre;
                $carrusel->urlimagen5 = $url1;
                $carrusel->titsite5 = $titsite1;
                $carrusel->save();
                Storage::put($nombre, file_get_contents($imagen));
                echo "Carrusel editado correctamente";
            }
        }
    }
}
