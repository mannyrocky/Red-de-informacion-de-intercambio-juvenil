<?php

namespace App\Http\Controllers;
use \App\Programas;
use \App\Juventud;
use \App\Dependencias;
use \App\Escuela;
use \App\Usuarios;
use \App\Eventos;
use \App\Noticias;
use Illuminate\Http\Request;
use \App\Http\Controllers\PDF;

class RegistrarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dependencia = Dependencias::all();
        $juventud = Juventud::all();
        $programas = Programas::all();
        $noticias = Noticias::all();
        $eventos = Eventos::all();
        $escolaridad = 'Kinder';
        $escuela = Escuela::all()->where('escolaridad','=',$escolaridad);
        return view('auth.registrar',compact('dependencia','juventud','programas','escuela','eventos','noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $escuela = new Usuarios;
        $escuela->nombres = $request->nombres;
        $escuela->apellidos = $request->apellidos;
        $escuela->telefono = $request->telefono;
        $escuela->curp = $request->curp;
        $escuela->email = $request->email;
        $escuela->Escolaridad = $request->Escolaridad;
        $escuela->Escuela = $request->Escuela;
        $escuela->intereses = $request->intereses;
        $escuela->save();
        $data = [
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'telefono' => $request->telefono,
            'curp' => $request->curp,
            'email' => $request->email,
            'Escuela' => $request->Escuela

        ];
        $view = \View::make('Gafete.codigo',compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('codigo');
        return $pdf->download('codigo');
        
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
    public function show($escolaridad)
    {
         $escolar = Escuela::all()->where('escolaridad','=',$escolaridad);
         $html="";
         foreach($escolar as $escuelita){
                $html .= "<option>".$escuelita->nombre_escuela."</option>";
        }
         echo $html;
        
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mostrar(Request $request)
    {
        $dependencia = Dependencias::all();
        $juventud = Juventud::all();
        $programas = Programas::all();
        $noticias = Noticias::all();
        $eventos = Eventos::all();
        $user = Usuarios::Search($request->nombres)->orderBy('id','ASC')->paginate(2);
        return view('codigojoven.Registros',compact('dependencia','juventud','programas','noticias','eventos'))->with('user',$user);
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
