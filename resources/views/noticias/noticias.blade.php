@extends('layouts.layout')
 
@section('content')
<div class="container-fluid">
<div class="row bg-dark justify-content-center d-block" style="color:white;">
    <p class="text-center lead text-uppercase font-weight-bold" style="font-size:1.8rem">{{$noti->titulonoti}}</p>
        <p class="text-center lead">{{$noti->fechanoti}} por {{$noti->autornoti}}</p>
    </div>
</div>
<div class="container shadow p-3 mb-5 bg-white rounded">
    <div class="photo-gallery">
        <div class="container-fluid">
            <div class="row photos justify-content-center">
                <a href="../../uploads/{{$noti->imagennoti}}" data-lightbox="gallery"  style="max-height:400px;">
                    <img src="../../uploads/{{$noti->imagennoti}}" alt="segunda imagen" height="400px" width="100%" class="shadow p-3 mb-5">
                </a>
            </div>
            <div class="row justify-content-center">
                <p class="font-weight-light">{{$noti->Descripcionnot}}</p>
            </div>
        </div>
    </div>
</div>
@endsection