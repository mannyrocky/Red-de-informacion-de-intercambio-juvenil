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
                                    <h3>Komi-san Besto waifu</h3>
                                    <p>Komi-san god</p>
                                </div>
                        </div>
                        <div class="carousel-item">
                        <img src="../../uploads/{{$carrusel->imagen2}}" alt="segunda imagen" 
                                    height="500px" width="100%">
                                    <div class="overlay"></div>
                                    <div class="btnn" data-toggle="modal" data-target="#editarcarrusel"><a href="#"> Editar imágenes </a></div>
                                <div class="carousel-caption">
                                    <h3>Komi-san Besto waifu</h3>
                                    <p>Komi-san god</p>
                                </div>
                        </div>
                        <div class="carousel-item">
                        <img src="../../uploads/{{$carrusel->imagen3}}" alt="tercera imagen" 
                                    height="500px" width="100%">
                                    <div class="overlay"></div>
                                    <div class="btnn" data-toggle="modal" data-target="#editarcarrusel"><a href="#"> Editar imágenes</a></div>
                                <div class="carousel-caption">
                                    <h3>Komi-san Besto waifu</h3>
                                    <p>Komi-san god</p>
                                </div>
                        </div>
                        <div class="carousel-item">
                        <img src="../../uploads/{{$carrusel->imagen4}}" alt="tercera imagen" 
                                    height="500px" width="100%">
                                    <div class="overlay"></div>
                                    <div class="btnn" data-toggle="modal" data-target="#editarcarrusel"><a href="#"> Editar imágenes</a></div>
                                <div class="carousel-caption">
                                    <h3>Komi-san Besto waifu</h3>
                                    <p>Komi-san god</p>
                                </div>
                        </div>
                        <div class="carousel-item">
                        <img src="../../uploads/{{$carrusel->imagen5}}" alt="tercera imagen" 
                                    height="500px" width="100%">
                                    <div class="overlay"></div>
                                    <div class="btnn" data-toggle="modal" data-target="#editarcarrusel"><a href="#"> Editar imágenes</a></div>
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
                <div class="container" id ="evento">
                    <div class="row">
                        <div class="col-md-3">
                            <h2>{{$even1->tituloev}}</h2><br>
                            <img src="../../uploads/{{$even2->imagenjuv}}" width="100" class="my-4">
                            <p style="t">
                                {{$even1->Descripcionev}}
                            </p>
                            <p><button class="btn btn-outline-success evento" data-toggle="modal" data-target="#editarevento" onclick="mostrarevento('{{$even1->id}}','{{$even1->tituloev}}','{{$even1->depev}}','{{$even1->lugar}}','{{$even1->Descripcionev}}','{{$even1->imagenjuv}}');">Editar</button></p>
                        </div>
                        <div class="col-md-3">
                            <h2>{{$even2->tituloev}}</h2><br>
                            <img src="../../uploads/{{$even2->imagenjuv}}" width="100" class="my-4">
                            <p style="t">
                            {{$even2->Descripcionev}}
                            </p>
                            <p><button class="btn btn-outline-success evento" data-toggle="modal" data-target="#editarevento" onclick="mostrarevento('{{$even2->id}}','{{$even2->tituloev}}','{{$even2->depev}}','{{$even2->lugar}}','{{$even2->Descripcionev}}','{{$even2->imagenjuv}}');">Editar</button></p>
                        </div>
                        <div class="col-md-3" >
                                <h2>{{$even3->tituloev}}</h2><br>
                                <img src="../../uploads/{{$even3->imagenjuv}}" width="100" class="my-4">
                                <p style="t">
                                    {{$even3->Descripcionev}}
                                </p>
                                <p><button class="btn btn-outline-success evento" data-toggle="modal" data-target="#editarevento"onclick="mostrarevento('{{$even3->id}}','{{$even3->tituloev}}','{{$even3->depev}}','{{$even3->lugar}}','{{$even3->Descripcionev}}','{{$even3->imagenjuv}}');">Editar</button></p>
                        </div>
                        <div class="col-md-3">
                                <h2>{{$even4->tituloev}}</h2><br>
                                <img src="../../uploads/{{$even4->imagenjuv}}" width="100" class="my-4">
                                <p style="t">
                                {{$even4->Descripcionev}}
                            </p>
                                <p><button class="btn btn-outline-success evento" data-toggle="modal" data-target="#editarevento" onclick="mostrarevento('{{$even4->id}}','{{$even4->tituloev}}','{{$even4->depev}}','{{$even4->lugar}}','{{$even4->Descripcionev}}','{{$even4->imagenjuv}}');">Editar</button></p>
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
                                    <h3><img src="../../uploads/{{$noti1->imagennoti}}" width="100px" height ="100px">{{$noti1->titulonoti}}</h3>
                                    <p>{{$noti1->Descripcionnot}}</p>
                                    <p><button class="btn btn-primary noticias" data-toggle="modal" data-target="#editarnoticia"onclick="mostrarnoticia('{{$noti1->id}}','{{$noti1->titulonoti}}','{{$noti1->autornoti}}','{{$noti1->fechanoti}}','{{$noti1->Descripcionnot}}','{{$noti1->imagennoti}}');"> Editar </button></p>
                                </div>
                                <div class="footer-main-item col-md-12">
                                    <h3><img src="../../uploads/{{$noti2->imagennoti}}" width="100px" height ="100px">{{$noti2->titulonoti}}</h3>
                                    <p>{{$noti2->Descripcionnot}}</p>
                                    <p><button class="btn btn-primary noticias" data-toggle="modal" data-target="#editarnoticia" onclick="mostrarnoticia('{{$noti2->id}}','{{$noti2->titulonoti}}','{{$noti2->autornoti}}','{{$noti2->fechanoti}}','{{$noti2->Descripcionnot}}','{{$noti2->imagennoti}}');" > Editar </button></p>
                                </div>
                                <div class="footer-main-item col-md-12">
                                    <h3><img src="../../uploads/{{$noti3->imagennoti}}" width="100px" height ="100px">{{$noti3->titulonoti}}</h3>
                                    <p>{{$noti3->Descripcionnot}}</p>
                                    <p><button class="btn btn-primary noticias" data-toggle="modal" data-target="#editarnoticia" onclick="mostrarnoticia('{{$noti3->id}}','{{$noti3->titulonoti}}','{{$noti3->autornoti}}','{{$noti3->fechanoti}}','{{$noti3->Descripcionnot}}','{{$noti3->imagennoti}}');"> Editar </button></p>
                                </div>
                                <div class="footer-main-item col-md-12">
                                    <h3><img src="../../uploads/{{$noti4->imagennoti}}" width="100px" height ="100px">{{$noti4->titulonoti}}</h3>
                                    <p>{{$noti4->Descripcionnot}}</p>
                                    <p><button class="btn btn-primary noticias" data-toggle="modal" data-target="#editarnoticia" onclick="mostrarnoticia('{{$noti4->id}}','{{$noti4->titulonoti}}','{{$noti4->autornoti}}','{{$noti4->fechanoti}}','{{$noti4->Descripcionnot}}','{{$noti4->imagennoti}}');"> Editar </button></p>
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

@endsection