<?php

namespace App\Http\Controllers;
use App\Eventos;
use Illuminate\Http\Request;

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
    public function edit(Request $request,$id)
    {
        $evento = Eventos::find($id);
        $data = $request->all();
        $imagen = $request->file('imagenjuv');
        $imagenjuv = $imagen->getClientOriginalName();
        $titulo = $_POST['tituloev'];
        $depeneve = $_POST['depev'];
        $lugar = $_POST['lugar'];
        $descripcion = $_POST['Descripcionev'];
        $evento->tituloev = $titulo;
        $evento->depev = $depeneve;
        $evento->lugar = $lugar;
        $evento->Descripcionev = $descripcion;
        $evento->imagenjuv =$imagenjuv;
        $evento->save();
        Storage::put($imagenjuv, file_get_contents($imagen));
        echo"Evento Editado Exitosamente";
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
