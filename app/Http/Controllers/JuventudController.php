<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Juventud;
use \App\Dependencias;
use \App\Programas;
use \App\Eventos;
use \App\Noticias;
use Illuminate\Support\Facades\Storage;

class JuventudController extends Controller
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
        $usuario = new Juventud;
        $usuario->titulo = $request->titulo;
        $usuario->autor = $request->autor;
        $usuario->fecha = $request->fecha;
        $usuario->descripcionjuv = $request->descripcionjuv;
        if(isset($_POST['imagenjuv'])){
            $usuario->imagenjuv = $usuario->imagenjuv;
            $usuario->save();
        }else{
            $imagen = $request->file('imagenjuv');
            $imagenjuv = $imagen->getClientOriginalName();
            $usuario->imagenjuv = $imagenjuv;
            $usuario->save();
            Storage::put($imagenjuv, file_get_contents($imagen));
        }
        echo"Noticia Creada Exitosamente";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dependencia = Dependencias::all();
        $programas = Programas::all();
        $juventud=Juventud::all();
        $noticias = Noticias::all();
        $eventos = Eventos::all();
        $juve = Juventud::find($id);
        return view("juventud.Juventud",compact("juventud","juve","dependencia","programas","noticias","eventos"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $usuario = Juventud::find($id);
        $data = $request->all();
        $usuario->titulo = $request->titulo;
        $usuario->autor = $request->autor;
        $usuario->fecha = $request->fecha;
        $usuario->descripcionjuv = $request->descripcionjuv;
        if(isset($_POST['imagenjuv'])){
            $usuario->imagenjuv = $usuario->imagenjuv;
            $usuario->save();
        }else{
            $imagen = $request->file('imagenjuv');
            $imagenjuv = $imagen->getClientOriginalName();
            $usuario->imagenjuv = $imagenjuv;
            $usuario->save();
            Storage::put($imagenjuv, file_get_contents($imagen));
        }
        echo"Editado Exitosamente";
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
    public function borrar($id)
    {
        Juventud::destroy($id);
        echo"Borrado Exitosamente";
    }
}
