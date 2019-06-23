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
        <style>
        
        </style>
<div class="container" id ="infodep">
    <div class="row justify-content-center">
        <div class="col-md-3 shadow-lg p-3 ml-5 mb-5 bg-white rounded hvr-grow">
        <a href="#" >
             <img src="../../uploads/{{$noti2->imagennoti}}"  style="height:250px; width:250px;"alt="" > 
            <div class="info btn btn-link">
                Evento 1
            </div>
        </a>
        </div>
        <div class="col-md-3 shadow-lg p-3 mb-5 ml-5 bg-white rounded hvr-grow">
        <a href="#">
             <img src="../../uploads/{{$noti2->imagennoti}}"  style="height:250px; width:250px;"alt="" > 
            <div class="info btn btn-link">
                Evento 2
            </div>
        </a>
        </div>
        <div class="col-md-3 shadow-lg p-3 mb-5 ml-5 bg-white rounded hvr-grow">
        <a href="#">
             <img src="../../uploads/{{$noti2->imagennoti}}"  style="height:250px; width:250px;"alt="" > 
            <div class="info btn btn-link">
                Evento 3
            </div>
        </a>
        </div>
    </div>
</div>
        <hr>
        <div class="Container" id ="noticias">
            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="footer-main-item col-md-12 shadow-sm p-3 mb-5 bg-white rounded">
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-md-3">
                                        <img src="../../uploads/{{$noti2->imagennoti}}" class="card-img" style="height:200px;width:200px;">
                                    </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <div class="row justify-content-end px-2">
                                        <a class="card-text" href="#"><small>Ver más</small></a>
                                        </div>
                                        
                                    </div>
                                </div>
                        </div>
                </div>
                        </div>
                        <hr>
                        <div class="footer-main-item col-md-12 shadow-sm p-3 mb-5 bg-white rounded">
                        <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-md-3">
                                        <img src="../../uploads/{{$noti2->imagennoti}}" class="card-img" style="height:200px;width:200px;">
                                    </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <div class="row justify-content-end px-2">
                                        <a class="card-text" href="#"><small>Ver más</small></a>
                                        </div>
                                        
                                    </div>
                                </div>
                        </div>
                        </div>
                        </div>
                        <hr>
                        <div class="footer-main-item col-md-12 shadow-sm p-3 mb-5 bg-white rounded">
                        <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-md-3">
                                        <img src="../../uploads/{{$noti2->imagennoti}}" class="card-img" style="height:200px;width:200px;">
                                    </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <div class="row justify-content-end px-2">
                                        <a class="card-text" href="#"><small>Ver más</small></a>
                                        </div>
                                        
                                    </div>
                                </div>
                        </div>
                        </div>
                        </div>
                        <hr>
                        <div class="footer-main-item col-md-12 shadow-sm p-3 mb-5 bg-white rounded">
                        <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-md-3">
                                        <img src="../../uploads/{{$noti2->imagennoti}}" class="card-img" style="height:200px;width:200px;">
                                    </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <div class="row justify-content-end px-2">
                                        <a class="card-text" href="#"><small>Ver más</small></a>
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