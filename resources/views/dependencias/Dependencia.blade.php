@extends('layouts.layout')
@section('content')
<div style="background:#EEEE;">
<div class="container-fluid">
<div class="row bg-primary justify-content-center d-block" style="color:white;">
    <p class="text-center lead text-uppercase font-weight-bold" style="font-size:2.8rem">{{$valor->nombredep}}</p>
        <p class="text-center lead">Director: {{$valor->director}}</p>
    </div>
</div>
<div class="container shadow p-3 mb-5 bg-white rounded">
    <div class="photo-gallery">
        <div class="container-fluid">
            <div class="row photos justify-content-center">
                <a href="../../uploads/{{$valor->imagendep}}" data-lightbox="gallery"  style="max-height:400px;">
                    <img src="../../uploads/{{$valor->imagendep}}" alt="segunda imagen" height="400px" width="100%" class="shadow p-3 mb-5">
                </a>
            </div>
            <div class="row justify-content-start">
                <p class="font-weight-light">{{$valor->descripciondep}}</p><br>
                <p class="font-weight-light">Para conocer la página de Cerca haz click <a href="http://{{$valor->url}}">aqui</a></p>
            </div>
        </div>
    </div>
</div>
</div>

@endsection