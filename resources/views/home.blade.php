@extends('layouts.layout')
 
@section('content')
<div style="background:#EEEEEE;">
    <div class="container">
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
                            <div class="carousel-item active"><a href="http://{{$carrusel->urlimagen1}}">
                                <img src="../../uploads/{{$carrusel->imagen1}}" alt="primera imagen" 
                                    height="500px" width="100%">
                                </a>
                                <div class="carousel-caption">
                                    <h3>{{$carrusel->titsite1}}</h3>
                                </div>
                            </div>
                        <div class="carousel-item">
                            <a href="htpp://{{$carrusel->urlimagen2}}"><img src="../../uploads/{{$carrusel->imagen2}}" alt="segunda imagen" 
                            height="500px" width="100%">
                            </a>
                            <div class="carousel-caption">
                                <h3>{{$carrusel->titsite2}}</h3>
                            </div>   
                        </div>
                        <div class="carousel-item">
                            <img src="../../uploads/{{$carrusel->imagen3}}" alt="tercera imagen" 
                            height="500px" width="100%">
                            <a href="htpp://"></a>
                            <div class="carousel-caption">
                                <h3>{{$carrusel->titsite3}}</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../../uploads/{{$carrusel->imagen4}}" alt="cuarta imagen" 
                            height="500px" width="100%">
                            <a href="htpp://"></a>
                            <div class="carousel-caption">
                                <h3>{{$carrusel->titsite4}}</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../../uploads/{{$carrusel->imagen5}}" alt="quinta imagen" 
                            height="500px" width="100%">
                            <a href="htpp://"></a>
                            <div class="carousel-caption">
                                <h3>{{$carrusel->titsite5}}</h3>
                            </div>
                        </div>
                    </div>
                    <a href="#carrusel" class="carousel-control-prev" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">anterior</span>
                    </a>
                    <a href="#carrusel" class="carousel-control-next" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
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
                <a href="{{url('/eventos/eventos/'.$even1->id)}}" >
                    <img src="../../uploads/{{$even1->imagenjuv}}"  style="height:250px; width:250px;"alt="" > 
                    <div class="info btn btn-link">
                        {{$even1->tituloev}}
                    </div>
                </a>
            </div>
            <div class="col-md-3 shadow-lg p-3 mb-5 ml-5 bg-white rounded hvr-grow">
                <a href="{{url('/eventos/eventos/'.$even2->id)}}">
                    <img src="../../uploads/{{$even2->imagenjuv}}"  style="height:250px; width:250px;"alt="" > 
                    <div class="info btn btn-link">
                        {{$even2->tituloev}}
                    </div>
                </a>
            </div>
            <div class="col-md-3 shadow-lg p-3 mb-5 ml-5 bg-white rounded hvr-grow">
                <a href="{{url('/eventos/eventos/'.$even3->id)}}">
                    <img src="../../uploads/{{$even3->imagenjuv}}"  style="height:250px; width:250px;"alt="" > 
                    <div class="info btn btn-link">
                        {{$even3->tituloev}}
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
                                    <img src="../../uploads/{{$noti1->imagennoti}}" class="card-img" style="height:200px;width:200px;">
                                </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title">{{$noti1->titulonoti}}</h5>
                                    <p id="notides1" class="card-text">{{$noti1->Descripcionnot}}</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <div class="row justify-content-end px-2">
                                        <a class="card-text" href="{{url('/noticias/noticias/'.$noti1->id)}}"><small>Ver más</small></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-main-item col-md-12 shadow-sm p-3 mb-5 bg-white rounded">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-3">
                                    <img src="../../uploads/{{$noti2->imagennoti}}" class="card-img" style="height:200px;width:200px;">
                                    </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$noti2->titulonoti}}</h5>
                                        <p id="notides2" class="card-text">{{$noti2->Descripcionnot}}</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <div class="row justify-content-end px-2">
                                            <a class="card-text" href="{{url('/noticias/noticias/'.$noti2->id)}}"><small>Ver más</small></a>
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
                                    <img src="../../uploads/{{$noti3->imagennoti}}" class="card-img" style="height:200px;width:200px;">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$noti3->titulonoti}}</h5>
                                        <p id="notides3" class="card-text">{{$noti3->Descripcionnot}}</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <div class="row justify-content-end px-2">
                                            <a class="card-text" href="{{url('/noticias/noticias/'.$noti3->id)}}"><small>Ver más</small></a>
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
                                    <img src="../../uploads/{{$noti4->imagennoti}}" class="card-img" style="height:200px;width:200px;">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$noti4->titulonoti}}</h5>
                                        <p id="notides4" class="card-text">{{$noti4->Descripcionnot}}</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <div class="row justify-content-end px-2">
                                            <a class="card-text" href="{{url('/noticias/noticias/'.$noti4->id)}}"><small>Ver más</small></a>
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
$('#formCarrusel').on('submit', function(e) {
  // evito que propague el submit
  e.preventDefault();
  
  // agrego la data del form a formData
  var formData = new FormData(this);
  formData.append('_token', $('input[name=_token]').val());

  $.ajax({
      type:'POST',
      url: '../update/' + id,
      data:formData,
      cache:false,
      contentType: false,
      processData: false,
      success:function(data){
          toastr.error('Validation true!', 'se pudo Añadir los datos<br>', {timeOut: 5000});
      },
      error: function(jqXHR, text, error){
          toastr.error('Validation error!', 'No se pudo Añadir los datos<br>' + error, {timeOut: 5000});
      }
  });
});
</script>
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
    var cadfinal3 = cadres3 + "...";|
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