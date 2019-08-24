@extends('layouts.layoutgestor')
 
@section('content')
<style>

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0);
  transition: background 0.5s ease;
}

#carr:hover .overlay {
  display: block;
  background: rgba(0, 0, 0, .3);
}

.btnn {
  position: absolute;
  width: 100%;
  left:0;
  top: 180px;
  text-align: center;
  opacity: 0;
  transition: opacity .35s ease;
}

.btnn a {
  width: 200px;
  padding: 12px 48px;
  text-align: center;
  color: white;
  border: solid 2px white;
  z-index: 1;
}

#carr:hover .btnn {
  opacity: 1;
}
</style>
<div style="background:#EEEEEE;">
    <br>
    <div class="container" id="carr">
        <div  class="row">
            <div class="col-md-12">
                <div class="panel panel-default ">
                    <div class="carousel slide w-100" id="carrusel" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#carrusel" data-slide-to="0"></li>
                            <li data-target="#carrusel" data-slide-to="1"></li>
                            <li data-target="#carrusel" data-slide-to="2"></li>
                            <li data-target="#carrusel" data-slide-to="3"></li>
                            <li data-target="#carrusel" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src="../../uploads/{{$carrusel->imagen1}}" alt="primera imagen" 
                                    height="500px" width="100%">
                                    <div class="overlay"></div>
                                    <div class="btnn" id="1" data-toggle="modal" data-target="#editarcarrusel"><a href="#"> Editar imágenes </a></div>
                                <div class="carousel-caption">
                                    <h3 style="color:black;">{{$carrusel->titsite1}}</h3>
                                </div>
                            </div>
                        <div class="carousel-item">
                            <img src="../../uploads/{{$carrusel->imagen2}}" alt="segunda imagen" 
                            height="500px" width="100%">
                            <div class="overlay"></div>
                                    <div class="btnn" data-toggle="modal" data-target="#editarcarrusel"><a href="#"> Editar imágenes </a></div>
                            <div class="carousel-caption">
                                <h3 style="color:black;">{{$carrusel->titsite2}}</h3>
                            </div>   
                        </div>
                        <div class="carousel-item">
                            <img src="../../uploads/{{$carrusel->imagen3}}" alt="tercera imagen" 
                            height="500px" width="100%">
                            <div class="overlay"></div>
                                    <div class="btnn" data-toggle="modal" data-target="#editarcarrusel"><a href="#"> Editar imágenes </a></div>
                            <div class="carousel-caption">
                                <h3 style="color:black;">{{$carrusel->titsite3}}</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../../uploads/{{$carrusel->imagen4}}" alt="cuarta imagen" 
                            height="500px" width="100%">
                            <div class="overlay"></div>
                                    <div class="btnn" data-toggle="modal" data-target="#editarcarrusel"><a href="#"> Editar imágenes </a></div>
                            <div class="carousel-caption">
                                <h3 style="color:black;">{{$carrusel->titsite4}}</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../../uploads/{{$carrusel->imagen5}}" alt="quinta imagen" 
                            height="500px" width="100%">
                            <div class="overlay"></div>
                                    <div class="btnn" data-toggle="modal" data-target="#editarcarrusel"><a href="#"> Editar imágenes </a></div>
                            <div class="carousel-caption">
                                <h3 style="color:black;">{{$carrusel->titsite5}}</h3>
                            </div>
                        </div>
                    </div>
                    <a href="#carrusel" class="carousel-control-prev" role="button"
                        data-slide="prev"><button class=form-control style="margin-left:-100px;background:#1836BC; width:80px;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">anterior</span></button>
                    </a>
                    <a href="#carrusel" class="carousel-control-next" role="button" data-slide="next">
                        <button class=form-control style="margin-right:-100px;background:#1836BC; width:80px;">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><br>
<div style="background:white;">
    <div class="container" id ="eventos" name="eventos">
        <div class="row justify-content-center">
            <div class="col-md-3 shadow-lg p-3 ml-5 mb-5 bg-white rounded hvr-grow">
                <a class="eve" id = "{{$even1->id}}"data-id="{{$even1->eventoid}}" data-toggle="modal" data-target="#modificarEvento"href="#" >
                    <img id="imgevento1" src="../../uploads/{{$even1->imagenevento}}"  style="height:250px; width:250px;"alt="" > 
                    <div id="evento1" class="info btn btn-link">
                        {{$even1->eventotitulo}}
                    </div>
                </a>
            </div>
            <div class="col-md-3 shadow-lg p-3 mb-5 ml-5 bg-white rounded hvr-grow">
                <a class="eve" id = "{{$even2->id}}" data-id="{{$even2->eventoid}}" data-toggle="modal" data-target="#modificarEvento" href="#">
                    <img id="imgevento2" src="../../uploads/{{$even2->imagenevento}}"  style="height:250px; width:250px;"alt="" > 
                    <div id="evento2" class="info btn btn-link">
                        {{$even2->eventotitulo}}
                    </div>
                </a>
            </div>
            <div class="col-md-3 shadow-lg p-3 mb-5 ml-5 bg-white rounded hvr-grow">
                <a class="eve" id = "{{$even3->id}}" data-id="{{$even3->eventoid}}" data-toggle="modal" data-target="#modificarEvento" href="#">
                    <img id="imgevento3" src="../../uploads/{{$even3->imagenevento}}"  style="height:250px; width:250px;"alt="" > 
                    <div  id="evento3" class="info btn btn-link">
                        {{$even3->eventotitulo}}
                    </div>
                </a>
            </div>
        </div>
    </div>
</div><br>
<div style="background: #EEEEEE;">
    <div class="container" id ="noticias">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="footer-main-item col-md-12 shadow-sm p-3 mb-5 bg-white rounded">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-3">
                                    <img src="../../uploads/{{$noti1->imagennoticia}}" class="card-img" style="height:200px;width:200px;">
                                </div>
                            <div class="col-md-9">
                                <div class="card-body ">
                                    <h5 class="card-title">{{$noti1->noticiatitulo}}</h5>
                                    <p id="notides1" class="card-text">{{$noti1->contenidonoticia}}</p>
                                    <div class="row justify-content-end px-2">
                                        <a id="{{$noti1->id}}"data-id="{{$noti1->noticiaid}}"class="card-text noti" href="#" data-toggle="modal" data-target="#modificarNoticia"   ><small>Ver más</small></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-main-item col-md-12 shadow-sm p-3 mb-5 bg-white rounded">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-3">
                                    <img src="../../uploads/{{$noti2->imagennoticia}}" class="card-img" style="height:200px;width:200px;">
                                    </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$noti2->noticiatitulo}}</h5>
                                        <p id="notides2" class="card-text">{{$noti2->contenidonoticia}}</p>
                                        <div class="row justify-content-end px-2">
                                            <a id="{{$noti2->id}}" data-id="{{$noti2->noticiaid}}"class="card-text noti" href="#" data-toggle="modal" data-target="#modificarNoticia"><small>Ver más</small></a>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-main-item col-md-12 shadow-sm p-3 mb-5 bg-white rounded">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-3">
                                    <img src="../../uploads/{{$noti3->imagennoticia}}" class="card-img" style="height:200px;width:200px;">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$noti3->noticiatitulo}}</h5>
                                        <p id="notides3" class="card-text">{{$noti3->contenidonoticia}}</p>
                                        <div class="row justify-content-end px-2">
                                            <a id="{{$noti3->id}}" data-id="{{$noti3->noticiaid}}"class="card-text noti" href="#" data-toggle="modal" data-target="#modificarNoticia"><small>Ver más</small></a>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-main-item col-md-12 shadow-sm p-3 mb-5 bg-white rounded">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-3">
                                    <img src="../../uploads/{{$noti4->imagennoticia}}" class="card-img" style="height:200px;width:200px;">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$noti4->noticiatitulo}}</h5>
                                        <p id="notides4" class="card-text">{{$noti4->contenidonoticia}}</p>
                                        <div class="row justify-content-end px-2">
                                            <a id="{{$noti4->id}}" data-id="{{$noti4->noticiaid}}"class="card-text noti" href="#" data-toggle="modal" data-target="#modificarNoticia"><small>Ver más</small></a>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
<script>
$(document).ready(function(){
Recortar();});
</script>
<script>
function Recortar(){
    var cadena1 = $("#notides1").text();
    var cadres1 = cadena1.substring(0,220);
    var cadfinal1 = cadres1 + "...";
    var cadena2 = $("#notides2").text();
    var cadres2 = cadena2.substring(0,220);
    var cadfinal2 = cadres2 + "...";
    var cadena3 = $("#notides3").text();
    var cadres3 = cadena3.substring(0,220);
    var cadfinal3 = cadres3 + "...";
    var cadena4 = $("#notides4").text();
    var cadres4 = cadena4.substring(0,220);
    var cadfinal4 = cadres4 + "...";
    $("#notides1").text(cadfinal1);
    $("#notides2").text(cadfinal2);
    $("#notides3").text(cadfinal3);
    $("#notides4").text(cadfinal4);
}
</script>
@endsection