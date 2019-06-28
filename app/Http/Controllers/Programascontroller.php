<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Programas;
use \App\Juventud;
use \App\Dependencias;
use \App\Eventos;
use \App\Noticias;
use Illuminate\Support\Facades\Storage;
class Programascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $usuario = new Programas;
        $usuario->nomprog = $request->nomprog;
        $usuario->nomdep = $request->nomdep;
        $usuario->responsable = $request->responsable;
        $usuario->descriprog = $request->descriprog;
        if(isset($_POST['imagenprog'])){
            $usuario->imagenprog = $usuario->imagenprog;
            $usuario->save();
        }else{
            $imagen = $request->file('imagenprog');
            $imagenprog = $imagen->getClientOriginalName();
            $usuario->imagenprog = $imagenprog;
            $usuario->save();
            Storage::put($imagenprog, file_get_contents($imagen));
        }
        echo "Programa Agregado Correctamente";
        
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
        $pog = Programas::find($id);
        return view("programas.Programas",compact("pog","juventud","programas","dependencia","noticias","eventos"));  
    }

    public function mostrar($id){
        $programa = Programas::find($id);
        $arreglo = array();
        $arreglo[0] = $programa->id;
        $arreglo[1] = $programa->nomprog;
        $arreglo[2] = $programa->nomdep;
        $arreglo[3] = $programa->responsable;
        $arreglo[4] = $programa->descriprog;
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
        $usuario = Programas::find($id);
        $data = $request->all();
        $usuario->nomprog = $request->nomprog;
        $usuario->nomdep = $request->nomdep;
        $usuario->responsable = $request->responsable;
        $usuario->descriprog = $request->descriprog;
        if(isset($_POST['imagenprog'])){
            $usuario->imagenprog = $usuario->imagenprog;
            $usuario->save();
        }else{
            $imagen = $request->file('imagenprog');
            $imagenprog = $imagen->getClientOriginalName();
            $usuario->imagenprog = $imagenprog;
            $usuario->save();
            Storage::put($imagenprog, file_get_contents($imagen));
        }
        echo "Programa Editado Correctamente";
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
        Programas::destroy($id);
        echo "Programa Borrado Correctamente";
    }
}
