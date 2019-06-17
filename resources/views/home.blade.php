@extends('layouts.layout')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
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
                        <h3>Komi-san Besto waifu</h3>
                        <p>Komi-san god</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="htpp://{{$carrusel->urlimagen2}}"><img src="../../uploads/{{$carrusel->imagen2}}" alt="segunda imagen" 
                    height="500px" width="100%">
                    </a>
                    <div class="carousel-caption">
                        <h3>lotte Besto waifu</h3>
                        <p>lotte god</p>
                    </div>   
                </div>
                <div class="carousel-item">
                    <img src="../../uploads/{{$carrusel->imagen3}}" alt="tercera imagen" 
                    height="500px" width="100%">
                    <a href="htpp://"></a>
                    <div class="carousel-caption">
                        <h3>lotte Besto waifu</h3>
                        <p>lotte god</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../uploads/{{$carrusel->imagen4}}" alt="cuarta imagen" 
                    height="500px" width="100%">
                    <a href="htpp://"></a>
                    <div class="carousel-caption">
                        <h3>lotte Besto waifu</h3>
                        <p>lotte god</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../uploads/{{$carrusel->imagen5}}" alt="quinta imagen" 
                    height="500px" width="100%">
                    <a href="htpp://"></a>
                    <div class="carousel-caption">
                        <h3>lotte Besto waifu</h3>
                        <p>lotte god</p>
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
        <hr>
        <div class="container" id ="infodep">
            <div class="row">
                <div class="col-md-3">
                    <h2>{{$even1->tituloev}}</h2><br>
                            <img src="../../uploads/{{$even1->imagenjuv}}" width="100" height ="150px" class="my-4">
                            <p style="t">
                                {{$even1->Descripcionev}}
                            </p>
                    <p><a href="{{url('/eventos/eventos/'.$even1->id)}}"><button class="btn btn-outline-success">leer más</button></a></p>
                </div>
                <div class="col-md-3">
                    <h2>{{$even2->tituloev}}</h2><br>
                            <img src="../../uploads/{{$even2->imagenjuv}}" width="100" height ="150px" class="my-4">
                            <p style="t">
                                {{$even2->Descripcionev}}
                            </p>
                    <p><a href="{{url('/eventos/eventos/'.$even2->id)}}"><button class="btn btn-outline-success">leer más</button></a></p>
                </div>
                <div class="col-md-3" >
                        <h2>{{$even3->tituloev}}</h2><br>
                            <img src="../../uploads/{{$even3->imagenjuv}}" width="100" height ="150px" class="my-4">
                            <p style="t">
                                {{$even3->Descripcionev}}
                            </p>
                        <p><a href="{{url('/eventos/eventos/'.$even3->id)}}"><button class="btn btn-outline-success">leer más</button></a></p>
                </div>
                <div class="col-md-3">
                        <h2>{{$even4->tituloev}}</h2><br>
                            <img src="../../uploads/{{$even4->imagenjuv}}" width="100" height ="150px" class="my-4">
                            <p style="t">
                                {{$even4->Descripcionev}}
                            </p>
                        <p><a href="{{url('/eventos/eventos/'.$even4->id)}}"><button class="btn btn-outline-success">leer más</button></a></p>
                </div>
            </div>
        </div>
        <hr>
        <div class="Container" id ="noticias">
            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="footer-main-item col-md-12">
                            <h3><img src="../../uploads/{{$noti1->imagennoti}}" width="100px" height ="100px">{{$noti1->titulonoti}}</h3>
                                    <p>{{$noti1->Descripcionnot}}</p>
                            <p><a href="{{url('/noticias/noticias/'.$noti1->id)}}" class="btn btn-primary"> ver mas </a></p>
                        </div>
                        <div class="footer-main-item col-md-12">
                            <h3><img src="../../uploads/{{$noti2->imagennoti}}" width="100px" height ="100px">{{$noti2->titulonoti}}</h3>
                                    <p>{{$noti2->Descripcionnot}}</p>
                            <p><a href="{{url('/noticias/noticias/'.$noti2->id)}}" class="btn btn-primary"> ver mas </a></p>
                        </div>
                        <hr>
                        <div class="footer-main-item col-md-12">
                            <h3><img src="../../uploads/{{$noti3->imagennoti}}" width="100px" height ="100px">{{$noti3->titulonoti}}</h3>
                                    <p>{{$noti3->Descripcionnot}}</p>
                            <p><a href="{{url('/noticias/noticias/'.$noti3->id)}}" class="btn btn-primary"> ver mas </a></p>
                        </div>
                        <hr>
                        <div class="footer-main-item col-md-12">
                            <h3><img src="../../uploads/{{$noti4->imagennoti}}" width="100px" height ="100px">{{$noti4->titulonoti}}</h3>
                                    <p>{{$noti4->Descripcionnot}}</p>
                            <p><a href="{{url('/noticias/noticias/'.$noti4->id)}}" class="btn btn-primary justify-content-end" > ver mas </a></p>
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
@endsection