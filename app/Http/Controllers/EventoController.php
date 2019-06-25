<?php

namespace App\Http\Controllers;
use App\Eventos;
use App\Dependencias;
use App\Programas;
use App\Juventud;
use App\Noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventoController extends Controller
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
    public function create(Request $request)
    {
        $evento = new Eventos;
        $evento->tituloev = $request->tituloev;
        $evento->depev = $request->depev;
        $evento->lugar = $request->lugar;
        $evento->Descripcionev = $request->Descripcionev;
        if(isset($_POST['imagenjuv'])){
            $evento->imagenjuv = $evento->imagenjuv;
            $evento->save();
        }else{
            $imagen = $request->file('imagenjuv');
            $imagenjuv = $imagen->getClientOriginalName();
            $evento->imagenjuv = $imagenjuv;
            $evento->save();
            Storage::put($imagenjuv, file_get_contents($imagen));
        }
        echo "Evento Agregado Correctamente";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    public function mostrar($id){
        $evento = Eventos::find($id);
        $arreglo = array();
        $arreglo[0] = $evento->id;
        $arreglo[1] = $evento->tituloev;
        $arreglo[2] = $evento->depev;
        $arreglo[3] = $evento->lugar;
        $arreglo[4] = $evento->Descripcionev;
        echo json_encode($arreglo);
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
        $juventud = Juventud::all();
        $programas = Programas::all();
        $noticias = Noticias::all();
        $eventos = Eventos::all();
        $even = Eventos::find($id);
        return view("eventos.eventos",compact("even","juventud","programas","dependencia","noticias","eventos"));
    }
    public function cambiar($id){
        $evento = Eventos::find($id);
        $arreglo = array();
        $arreglo[0] = $evento->tituloev;
        $arreglo[1] = $evento->depev;
        $arreglo[2] = $evento->lugar;
        $arreglo[3] = $evento->Descripcionev;
        echo json_encode($arreglo);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $evento = Eventos::find($id);
        $data = $request->all();
        $titulo = $request->tituloev;
        $depeneve = $request->depev;
        $lugar = $request->lugar;
        $descripcion = $request->Descripcionev;
        $evento->tituloev = $titulo;
        $evento->depev = $depeneve;
        $evento->lugar = $lugar;
        $evento->Descripcionev = $descripcion;
        if(isset($_POST['imagenjuv'])){
            $evento->imagenjuv = $evento->imagenjuv;
            $evento->save();
        }else{
            $imagen = $request->file('imagenjuv');
            $imagenjuv = $imagen->getClientOriginalName();
            $evento->imagenjuv =$imagenjuv;
            $evento->save();
            Storage::put($imagenjuv, file_get_contents($imagen));
        }
        echo "Evento Editado Exitosamente";
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
