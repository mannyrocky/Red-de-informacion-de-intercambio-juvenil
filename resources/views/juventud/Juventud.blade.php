@extends('layouts.layout')
 
@section('content')
    <div class="container">
    <img src="../../uploads/{{$juve->imagenjuv}}" alt="segunda imagen" 
                        height="300px" width="100%">
    <h1>Titulo: {{$juve->titulo}}</h1>
    <h2>Autor: {{$juve->autor}}</h2>
    <h2>Fecha de Publicacion: {{$juve->fecha}}</h2>
    <p>{{$juve->descripcionjuv}}</p>
</div>
@endsection