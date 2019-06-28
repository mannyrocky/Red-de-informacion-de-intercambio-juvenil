@extends('layouts.layout')
 
@section('content')
<div class="container-fluid">
<div class="row bg-primary justify-content-center d-block" style="color:white;">
    <p class="text-center lead text-uppercase font-weight-bold" style="font-size:2.8rem">{{$pog->nomprog}}</p>
        <p style="font-size:1.4rem"class="text-center lead font-weight-bold">Dependencia: {{$pog->nomdep}} <br>Responsable del Programa: {{$pog->responsable}}</p>
    </div>
</div>
<div style="background:#EEEE;">
    <div class="container shadow p-3 mb-5 bg-white rounded">
        <div class="photo-gallery">
            <div class="container-fluid">
                <div class="row photos justify-content-center">
                    <a href="../../uploads/{{$pog->imagenprog}}" data-lightbox="gallery"  style="max-height:400px;">
                        <img src="../../uploads/{{$pog->imagenprog}}" alt="segunda imagen" height="400px" width="100%" class="shadow p-3 mb-5">
                    </a>
                </div>
                <div class="row justify-content-start">
                    <p class="font-weight-light">{{$pog->descriprog}}</p>
                </div>
            </div>
        </div>
    </div><br>
</div>
@endsection