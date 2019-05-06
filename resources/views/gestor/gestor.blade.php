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
<div class="container" id="carr">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="carousel slide w-100" id="carrusel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li class="active" data-target="#carrusel" data-slide-to="0"></li>
                        <li data-target="#carrusel" data-slide-to="1"></li>
                        <li data-target="#carrusel" data-slide-to="2"></li>
                    </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="../../imagen/fondo4.jpg" alt="primera imagen" 
                            height="500px" width="100%">
                            <div class="overlay"></div>
                            <div class="btnn"><a href="#"> Editar imágenes </a></div>
                        <div class="carousel-caption">
                            <h3>Komi-san Besto waifu</h3>
                            <p>Komi-san god</p>
                        </div>
                   </div>
                <div class="carousel-item">
                <img src="../../imagen/fondo4.jpg" alt="primera imagen" 
                            height="500px" width="100%">
                            <div class="overlay"></div>
                            <div class="btnn"><a href="#"> Editar imágenes </a></div>
                        <div class="carousel-caption">
                            <h3>Komi-san Besto waifu</h3>
                            <p>Komi-san god</p>
                        </div>
                </div>
                <div class="carousel-item">
                <img src="../../imagen/fondo4.jpg" alt="primera imagen" 
                            height="500px" width="100%">
                            <div class="overlay"></div>
                            <div class="btnn"><a href="#"> Editar imágenes</a></div>
                        <div class="carousel-caption">
                            <h3>Komi-san Besto waifu</h3>
                            <p>Komi-san god</p>
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
        <div class="container" id ="infodep">
            <div class="row">
                <div class="col-md-3">
                    <h2>Titulo 1</h2><br>
                    <img src="../../imagen/fondo4.jpg" width="100" class="my-4">
                    <p style="t">El Doc. Emmet Brown anuncia la invencion del condensador
                                de flujos (Flux Capacitor), Dispositivo que permite
                                el viaje en el tiempo.
                    </p>
                    <p><a href="{{route('evento1')}}"><button class="btn btn-outline-success">leer más</button></a></p>
                </div>
                <div class="col-md-3">
                    <h2>Titulo 1</h2><br>
                    <img src="../../imagen/fondo4.jpg" width="100" class="my-4">
                    <p style="t">El Doc. Emmet Brown anuncia la invencion del condensador
                                de flujos (Flux Capacitor), Dispositivo que permite
                                el viaje en el tiempo.
                    </p>
                    <p><button class="btn btn-outline-success">leer más</button></p>
                </div>
                <div class="col-md-3" >
                        <h2>Titulo 1</h2><br>
                        <img src="../../imagen/fondo4.jpg" width="100" class="my-4">
                        <p style="t">El Doc. Emmet Brown anuncia la invencion del condensador
                                de flujos (Flux Capacitor), Dispositivo que permite
                                el viaje en el tiempo.
                        </p>
                        <p><button class="btn btn-outline-success">leer más</button></p>
                </div>
                <div class="col-md-3">
                        <h2>Titulo 1</h2><br>
                        <img src="../../imagen/fondo4.jpg" width="100" class="my-4">
                        <p style="t">El Doc. Emmet Brown anuncia la invencion del condensador
                                de flujos (Flux Capacitor), Dispositivo que permite
                                el viaje en el tiempo.
                    </p>
                        <p><button class="btn btn-outline-success">leer más</button></p>
                </div>
            </div>
        </div>
    </div>
</div>
        <div class="container" id ="noticias">
            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="footer-main-item col-md-12">
                            <h3><i class="fa fa-text-height" aria-hidden="true"></i>Noticia1</h3>
                            <p>Herramientas para sitio web responsive</p>
                            <p><a href="#" class="btn btn-primary"> ver mas </a></p>
                        </div>
                        <div class="footer-main-item col-md-12">
                            <h3><img src="../../imagen/lotte1.jpg" width="100px" height ="100px">Noticia2</h3>
                            <p>Libreria para Javascript muy versatil</p>
                            <p><a href="#" class="btn btn-primary"> ver mas </a></p>
                        </div>
                        <div class="footer-main-item col-md-12">
                            <h3><i class="fa fa-paperclip" aria-hidden="true"></i>Noticia3</h3>
                            <p>Libreria para generar hojas de estilo en cascada</p>
                            <p><a href="#" class="btn btn-primary"> ver mas </a></p>
                        </div>
                        <div class="footer-main-item col-md-12">
                            <h3><i class="fa fa-paperclip" aria-hidden="true"></i>Noticia4</h3>
                            <p>Libreria para generar hojas de estilo en cascada</p>
                            <p><a href="#" class="btn btn-primary justify-content-end" > ver mas </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection