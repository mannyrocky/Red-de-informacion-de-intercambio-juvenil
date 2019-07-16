<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Dependencias;
use \App\Juventud;
use \App\Programas;
use \App\Eventos;
use \App\Noticias;
use Illuminate\Support\Facades\Storage;
class DependenciaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
        $usuario = new Dependencias;
        $data = $request->all();
        $usuario->nombredep = $request->nombredep;
        $usuario->director = $request->director;
        $usuario->descripciondep = $request->descripciondep;
        $usuario->url = $request->url;
        if(isset($_POST['imagendep'])){
            $usuario->imagendep = "";
            $usuario->save();
        }else{
            $imagen = $request->file('imagendep');
            $imagendep = $imagen->getClientOriginalName();
            $usuario->imagendep = $imagendep;
            $usuario->save();
            Storage::put($imagendep, file_get_contents($imagen));
        }
        echo"Dependencia Agregada Correctamente";
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $juventud = Juventud::all();
        $dependencia = Dependencias::all();
        $programas = Programas::all();
        $noticias = Noticias::all();
        $eventos = Eventos::all();
        $valor = Dependencias::find($id);
        //dd($dependencia->id);
        return view('dependencias.Dependencia',compact('dependencia','valor','juventud','programas','noticias','eventos'));
    }
    public function mostrar($id){
        $dependencia = Dependencias::find($id);
        $arreglo = array();
        $arreglo[0] = $dependencia->id;
        $arreglo[1] = $dependencia->nombredep;
        $arreglo[2] = $dependencia->director;
        $arreglo[3] = $dependencia->url;
        $arreglo[4] = $dependencia->descripciondep;
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
        $usuario = Dependencias::find($id);
        $data = $request->all();
        $usuario->nombredep = $request->nombredep;
        $usuario->director = $request->director;
        $usuario->descripciondep = $request->descripciondep;
        $usuario->url = $request->url;
        if(isset($_POST['imagendep'])){
            $usuario->imagendep = $usuario->imagendep;
            $usuario->save();
        }else{
            $imagen = $request->file('imagendep');
            $imagendep = $imagen->getClientOriginalName();
            $usuario->imagendep = $imagendep;
            $usuario->save();
            Storage::put($imagendep, file_get_contents($imagen));
        }
        echo "Dependencia editada correctamente";

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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function borrar($id)
    {
        Dependencias::destroy($id);
        echo"borrado Exitosamente";
    }
    public function checar($id){
        $programas = Programas::all()->where('nomdep','=',$id);
        $numero = count($programas);
        echo $numero;
    }
}
