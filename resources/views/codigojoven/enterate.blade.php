@extends('layouts.layout') 
@section('content')
<div class="container-fluid">
<div class="row bg-primary justify-content-center d-block" style="color:white;">
    <p class="text-center lead text-uppercase font-weight-bold" style="font-size:2.8rem">{{$codigo->titulocodigo}}</p>
    </div>
</div>
<div class="container shadow p-3 mb-5 bg-white rounded">
    <div class="photo-gallery">
        <div class="container-fluid">
            <div class="row justify-content-start">
                <p class="font-weight-light">{{$codigo->infointro}}</p>
            </div><br>
            <div class="row justify-content-start">
                <p class="font-weight-light">{{$codigo->infodesa}}</p>
            </div><br>
            <div class="row justify-content-start">
                <p class="font-weight-light">{{$codigo->infoconclu}}</p>
                <p class="font-weight-light">para mas informacion al respecto has click <a href="https://{{$codigo->codigourl}}">Aqui</a></p>
            </div>
        </div>
    </div>
</div>
@endsection