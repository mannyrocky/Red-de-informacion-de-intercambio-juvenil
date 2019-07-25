<?php

namespace App\Http\Controllers;
use App\Noticias;
use App\Dependencias;
use App\Juventud;
use App\Programas;
use App\Eventos;
use App\MenuEvento;
use App\MenuNoticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoticiaController extends Controller
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
        $noticias = new Noticias;
        $titulo = $request->titulonoti;
        $autor = $request->autornoti;
        $fecha = $request->fechanoti;
        $descripcion = $request->descripnoti;
        $noticias->titulonoti = $titulo;
        $noticias->autornoti = $autor;
        $noticias->fechanoti = $fecha;
        $noticias->Descripcionnot = $descripcion;
        if(isset($_POST['imagennoti'])){
            $noticias->imagennoti = $noticias->imagennoti;
            $noticias->save();
        }else{
        $imagen = $request->file('imagennoti');
        $imagennoti = $imagen->getClientOriginalName();
        $noticias->imagennoti = $imagennoti;
        $noticias->save();
        Storage::put($imagennoti, file_get_contents($imagen));
        }
        echo "Agregado Noticia Correctamente";
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
        $noti = Noticias::find($id);
        if($noti==null){
            return view("errors.404",compact("juventud","programas","dependencia","noticias","eventos"));    
        }else{
        return view("noticias.noticias",compact("noti","juventud","programas","dependencia","noticias","eventos"));
        }
    }
    public function mostrar($id){
        $noticia = Noticias::find($id);
        $arreglo = array();
        $arreglo[0] = $noticia->id;
        $arreglo[1] = $noticia->titulonoti;
        $arreglo[2] = $noticia->autornoti;
        $arreglo[3] = $noticia->fechanoti;
        $arreglo[4] = $noticia->Descripcionnot;
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
        $noticias = Noticias::find($id);
        $data = $request->all();
        $titulo = $request->titulonoti;
        $autor = $request->autornoti;
        $fecha = $request->fechanoti;
        $descripcion = $request->descripnoti;
        $noticias->titulonoti = $titulo;
        $noticias->autornoti = $autor;
        $noticias->fechanoti = $fecha;
        $noticias->Descripcionnot = $descripcion;
        if(isset($_POST['imagennoti'])){
            $noticias->imagennoti = $noticias->imagennoti;
            $noticias->save();
        }else{
        $imagen = $request->file('imagennoti');
        $imagennoti = $imagen->getClientOriginalName();
        $noticias->imagennoti = $imagennoti;
        $noticias->save();
        Storage::put($imagennoti, file_get_contents($imagen));
        }
        echo "Editado Correctamente";
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
    public function cambiar($titulonoti, $valor,$val){
        $menunoticia = MenuNoticias::find($val);
        $noticia = Noticias::where('titulonoti',$titulonoti)->get();
        $titulo = $noticia[0]->titulonoti;
        $imagen = $noticia[0]->imagennoti;
        $descripcion = $noticia[0]->Descripcionnot;
        $id = $noticia[0]->id;
        $menunoticia->noticiaid = $id;
        $menunoticia->imagennoticia = $imagen;
        $menunoticia->noticiatitulo = $titulo;
        $menunoticia->contenidonoticia = $descripcion;
        $menunoticia->save();
        echo "Cambiado Exitosamente";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function borrar($id)
    {
        Noticias::destroy($id);
        echo "Noticia Borrada Correctamente";
    }
}
