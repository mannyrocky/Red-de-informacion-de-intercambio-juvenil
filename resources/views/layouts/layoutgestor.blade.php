<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Red de Intercambio de Informacion Juvenil</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
    <script src="{{ asset('assets/js/jquery-3.3.1.slim.min.js')}}"></script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <!--Fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/nav.css')}}">
    
</head>
<body>
<header>
    <nav class="navbar navbar-collapse" style="background: #d8d7dd">
        <div class="container">
            <ul class="nav">
                <li>
                <span class="fecha-actual">sábado, 06 de abril de 2019</span></li>
            </ul>
            <ul class="nav justify-content-end">
                <li><a href="http://www.bcs.gob.mx/formulario-de-contacto"><img src="http://www.bcs.gob.mx/wp-content/themes/bcsgob-wp/assets/images/icono-email.png" alt="Formulario de Contácto"> Contáctanos</a></li>
                <li><a href="tel:6121239400"><img src="http://www.bcs.gob.mx/wp-content/themes/bcsgob-wp/assets/images/icono-llamada.png" alt="Llamanos al 612 1239400"> (612) 123 9400 </a></li>
            </ul>
            <ul class="nav justify-content-end">
                <li><span class="siguenos">Siguenos</span></li>
                <li><a href="https://www.facebook.com/GobEdoBCS/" target="_blank"><img src="http://www.bcs.gob.mx/wp-content/themes/bcsgob-wp/assets/images/icono-facebook.png"><span class="sr-only">Facebook</span></a></li>
                <li><a href="https://twitter.com/GobBCS" target="_blank"><img src="http://www.bcs.gob.mx/wp-content/themes/bcsgob-wp/assets/images/icono-twitter.png"><span class="sr-only">Twitter</span></a></li>
                <li><a href="https://instagram.com/gobiernobcs/" target="_blank"><img src="http://www.bcs.gob.mx/wp-content/themes/bcsgob-wp/assets/images/icono-instagram.png"><span class="sr-only">Instagram</span></a></li>
                <li><a href="https://www.youtube.com/channel/UC0KrSRyYv3migvbasXzNJpQ" target="_blank"> <img src="http://www.bcs.gob.mx/wp-content/themes/bcsgob-wp/assets/images/icono-youtube.png"><span class="sr-only">YouTube</span></a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <nav class="navbar">
            <a class="menu-logo" href="/">
                <img src="http://www.bcs.gob.mx/wp-content/themes/bcsgob-wp/assets/images/logo-gobbcs.png" alt="Gobierno de Baja California Sur 2015-2021 | Mejor Futuro"> 
                <!-- <img src="http://www.bcs.gob.mx/wp-content/uploads/2018/03/logo-gbcs.jpg" alt="Gobierno de Baja California Sur 2015-2021 | Mejor Futuro"> -->
            </a>
            <form class="form-inline" action="">
                <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
                <button class="btn btn-success" type="submit">Buscar</button>
            </form>
        </nav>
        <nav class="navbar navbar-collapse">
            <div class="container-fluid">
                <ul class="nav justify-content-center ">
                    <li class="nav-item ">
                    <a class="nav-link" href="{{route('gestor')}}">Inicio</a>
                    </li>
                <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Dependencias
                        </a>
                        <div class="dropdown-menu">
                            @if (App\Dependencias::count() > 0)
                              @foreach($dependencias as $dependencia)
                                <button id="{{$dependencia->id}}" class="dropdown-item dependencia" data-toggle="modal" data-target="#editardependencia" onclick="mostrardep('{{$dependencia->id}}','{{$dependencia->nombredep}}','{{$dependencia->director}}','{{$dependencia->descripciondep}}','{{$dependencia->url}}','{{$dependencia->imagendep}}');">{{$dependencia->nombredep}}</button>
                              @endforeach
                            @endif
                            <button class="dropdown-item dependencia" data-toggle="modal" data-target="#agregardependencia">Agregar Dependencias</button>
                        </div>
                    </li>
                <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Código Joven
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Información</a>
                            <a class="dropdown-item" href="{{route('registrar')}}">Registrate</a>
                            <a class="dropdown-item" href="#">Enterate</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Juventud
                        </a>
                        <div class="dropdown-menu">
                        @if(App\Juventud::count()>0)
                          @foreach($juventudes as $juventud)
                          <button id="this.{{$juventud->id}}" class="dropdown-item juventud" data-toggle="modal"  data-target="#editarjuventud" onclick="mostrarjuv('{{$juventud->id}}','{{$juventud->titulo}}','{{$juventud->autor}}','{{$juventud->fecha}}','{{$juventud->descripcionjuv}}','{{$juventud->imagenjuv}}');">{{$juventud->titulo}}</button>
                          @endforeach
                        @endif
                            <button class="dropdown-item juventud" data-toggle="modal" data-target="#agregarjuventud">Agregar Noticia de Juventud</button>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Programas Sociales
                    </a>
                    <div class="dropdown-menu">
                      @if(App\Programas::count()>0)
                          @foreach($programa as $prog)
                          <button id="{{$prog->id}}" class="dropdown-item programa" data-toggle="modal"  data-target="#editarprograma" onclick="mostrarprog('{{$prog->id}}','{{$prog->nomprog}}','{{$prog->nomdep}}','{{$prog->responsable}}','{{$prog->descriprog}}','{{$prog->imagenprog}}');">{{$prog->nomprog}}</button>
                          @endforeach
                        @endif
                      <button class="dropdown-item programa" data-toggle="modal" data-target="#agregarprograma">Agregar Programa</button>
                    </div>
                    </li>
                </ul>
            </div>
        </nav> 
    </div>
</header>
 
 @yield('content')

 <footer style="background:gray;">
 <div class="pie-de-pagina">
  <div class="container-fluid">
    <div class="info-de-contacto">
      <div class="row">
          <div class="col-md-3">
          <img src="http://isjuventud.gob.mx/wp-content/themes/PortalesBCS/assets/images/logo-estado-mejor-futuro.png" alt="">
        </div>  
        <div class="col-md-6">
          <div class="info-domicilio">
            <h5> Instituto Sudcaliforniano de la Juventud
            </h5>
            Calle Antonio Navarro, esq. Melitón Albáñez <br>
            La Paz, Baja California Sur, México         
            </div>
        </div>
        <div class="enlaces-adicionales">
            <div class="container">
                <nav class="nav navbar-nav">
                </nav>
                <p class="copy">Algunos derechos reservados © 2015 - 2021</p>
            </div>
        </div>
    </div>
 </footer>
 <div class="modal fade" id="editarprograma" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Editar Programa</h5>
        <button type="button" class="close" data-dismiss="modal2" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModal">
        <form>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Id"  id="idprog" disabled>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Nombre del Programa"  id="progname">
            </div>
          </div>
          <div class="row mt-4">
            <div class="col">
              <input type="text" class="form-control" placeholder="Dependencia"  id="namedepe">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Responsable"  id="respo">
            </div>
          </div>
        </form>
        <div class="row mt-4"><div class="col">
          <textarea rows="4" class="form-control" placeholder="Descrpicion" id="descriprograma"></textarea>
        </div>
      </div>
      <div class="row mt-4 justify-content-center">
        <input class="btn btn-info" name="uploadedfile" id="imagenprograma" type="file" />
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-warning" id="borrarprog">Eliminar</button>
        <button type="button" class="btn btn-outline-success" id="editprog">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="editarjuventud" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Editar Programa</h5>
        <button type="button" class="close" data-dismiss="modal2" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModal">
        <form>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Id"  id="idj" disabled>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Titulo"  id="titjuv">
            </div>
          </div>
          <div class="row mt-4">
            <div class="col">
              <input type="text" class="form-control" placeholder="Autor"  id="autjuv">
            </div>
            <div class="col">
              <input type="date" class="form-control" placeholder="fecha"  id="fechajuv">
            </div>
          </div>
        </form>
        <div class="row mt-4"><div class="col">
          <textarea rows="4" class="form-control" placeholder="Descrpicion" id="descripjuv"></textarea>
        </div>
      </div>
      <div class="row mt-4 justify-content-center">
        <input class="btn btn-info" name="uploadedfile" id="imagenjuv" type="file" />
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-warning" id="borrarjuv">Eliminar</button>
        <button type="button" class="btn btn-outline-success" id="editjuv">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="editardependencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle2">Editar Dependencia</h5>
        <button type="button" class="close" data-dismiss="modal2" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModal">
        <form>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Id"  id="ids" disabled>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Dependencia"  id="depename">
            </div>
          </div>
          <div class="row mt-4">
            <div class="col">
              <input type="text" class="form-control" placeholder="Director"  id="direc">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Url"  id="urls">
            </div>
          </div>
        </form>
        <div class="row mt-4"><div class="col">
          <textarea rows="4" class="form-control" placeholder="Descrpicion" id="descrip"></textarea>
        </div>
      </div>
      <div class="row mt-4 justify-content-center">
        <input class="btn btn-info" name="uploadedfile" id="imagens" type="file" />
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-warning" id="borrardepe">Eliminar</button>
        <button type="button" class="btn btn-outline-success" id="edit">Aceptar</button>
      </div>
    </div>
  </div>
</div>  
<div class="modal fade" id="editarcarrusel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle2">Editar Carrusel</h5>
        <button type="button" class="close" data-dismiss="modal2" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModal">
          <div class="row">
            <div class="col">
              Imagen 1: <input type="file" class="btn btn-info"   name="imagen1" value="{{$carrusel->imagen1}}">
            </div>
            <div class="col">
              Url de Imagen1 : <input type="text" class="form-control"  id="urlimagen1" value="{{$carrusel->urlimagen1}}">
            </div>
          </div>
          <div class="row mt-4">
            <div class="col">
              Imagen 2:<input type="file" class="btn btn-info"  name="imagen2" value="{{$carrusel->imagen2}}">
            </div>
            <div class="col">
              url de Imagen 2:<input type="text" class="form-control"   id="urlimagen2" value="{{$carrusel->urlimagen2}}">
            </div>
          </div>
          <div class="row mt-4">
              <div class="col">
                Imagen 3:<input class="btn btn-info"  name="imagen3" type="file" value="{{$carrusel->imagen3}}">
              </div>
              <div class="col">
                  Url de Imagen 3<input class="form-control" type="text" placeholder="Url" id="urlimagen3" value="{{$carrusel->urlimagen3}}">
              </div>
          </div>
          <div class="row mt-4">
              <div class="col">
                Imagen 4:<input class="btn btn-info"  name="imagen4" type="file" value="{{$carrusel->imagen4}}">
              </div>
              <div class="col">
                  Url de Imagen 4<input class="form-control" type="text" placeholder="Url" id="urlimagen4" value="{{$carrusel->urlimagen4}}">
              </div>
          </div>  
          <div class="row mt-4">
              <div class="col">
                Imagen 5:<input class="btn btn-info"  name="imagen5" type="file" value="{{$carrusel->imagen5}}">           
              </div>
              <div class="col">
                  Url de Imagen 5<input class="form-control" type="text" placeholder="Url" id="urlimagen5" value="{{$carrusel->urlimagen5}}">
              </div>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button id="envImg" class="btn btn-outline-success">Aceptar</button>
      </div>
    </div>
  </div>
</div>  
<div class="modal fade" id="agregarprograma" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleprograma"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyprograma">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-success" id="rgProg">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="agregardependencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-success" id="rgDep">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="agregarjuventud" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titlejuventud"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyjuventud">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-success" id="rgJuv">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="editarevento" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle2">Editar Evento</h5>
        <button type="button" class="close" data-dismiss="modal2" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModal">
        <form>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Id"  id="idev" disabled>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Titulo Evento"  id="titev">
            </div>
          </div>
          <div class="row mt-4">
            <div class="col">
              <input type="text" class="form-control" placeholder="Dependencia"  id="depeve">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Lugar"  id="lugar">
            </div>
          </div>
        </form>
        <div class="row mt-4"><div class="col">
          <textarea rows="4" class="form-control" placeholder="Descrpicion" id="descripeven"></textarea>
        </div>
      </div>
      <div class="row mt-4 justify-content-center">
        <input class="btn btn-info" name="uploadedfile" id="imageneve" type="file" />
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-success" id="editevento">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="editarnoticia" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle2">Editar Noticia</h5>
        <button type="button" class="close" data-dismiss="modal2" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form method="post" enctype="multipart/form-data">
      <div class="modal-body" id="bodyModal">
        <form>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Id"  id="idnoti" disabled>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Titulo Noticia"  id="titnoti">
            </div>
          </div>
          <div class="row mt-4">
            <div class="col">
              <input type="text" class="form-control" placeholder="Autor"  id="autonoti">
            </div>
            <div class="col">
              <input type="date" class="form-control"  id="fechanoti">
            </div>
          </div>
        </form>
        <div class="row mt-4"><div class="col">
          <textarea rows="4" class="form-control" placeholder="Descrpicion" id="descripnoti"></textarea>
        </div>
      </div>
      <div class="row mt-4 justify-content-center">
        <input class="btn btn-info" name="imagenoti" id="imagenoti" type="file" />
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-success" id="editnoti">Aceptar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
    $(".programa").click(function(){
        var form = "";
        var titulo = $("#titleprograma");
        var body = $("#bodyprograma");
        form+='<form><div class="row"><div class="col"><input type="text" id="nomprog" class="form-control" placeholder="Nombre del programa"></div></div>';
       form+='<div class="row mt-4"><div class="col"><input type="text" class="form-control" id="nomdep" placeholder="Nombre de la dependencia"></div><div class="col"><input type="text" class="form-control" id="responsable" placeholder="Responsable"></div></div></form>';
       form+='<div class="row mt-4"><div class="col"><textarea rows="4" class="form-control" id="descriprog" placeholder="Descrpicion"></textarea></div></div>';
       form+='<div class="row mt-4 justify-content-center"><input class="btn btn-info" id="imagenprog" name="uploadedfile" type="file" /></div>';
       body.html(form);
       titulo.html('Agregar Programas Sociales');
    });
    $("#rgProg").click(function(){
        var nomprog = $("#nomprog").val();
        var responsable = $("#responsable").val();
        var nomdep = $("#nomdep").val();
        var descriprog = $("#descriprog").val();
        var imagenprog = $("#imagenprog").val();
        $.ajax({
            url:"/gestor/gestor/ajaxProgramas",
            method:'POST',
            data:{
            "_token":"{{ csrf_token() }}",
            nomprog:nomprog,
            nomdep:nomdep,
            responsable:responsable,
            descriprog:descriprog,
            imagenprog:imagenprog
            },
            success:function(data){
              console.log('se agrego');
        }
        });
    });
});
</script>
<script>
  $(document).ready(function(){
    $(".dependencia").click(function(){
        var form = "";
        var titulo = $("#title");
        var body = $("#body");
        form+='<form><div class="row">';
       form+='<div class="col"><input type="text" class="form-control" placeholder="Nombre de la Dependencia"  id="nombredep"></div></div>';
       form+='<div class="row mt-4"><div class="col"><input type="text" class="form-control" placeholder="Director"  id="director"></div><div class="col"><input type="text" class="form-control" placeholder="url" id="url"></div></div></form>';
       form+='<div class="row mt-4"><div class="col"><textarea rows="4" class="form-control" placeholder="Descrpicion" id="descripciondep"></textarea></div></div>';
       form+='<div class="row mt-4 justify-content-center"><input class="btn btn-info" name="uploadedfile" id="imagendep" type="file" /></div>';
       body.html(form);
       titulo.html('Agregar Dependencia');
    });
    $("#rgDep").click(function(){
        var nombredep = $("#nombredep").val();
        var director = $("#director").val();
        var url = $("#url").val();
        var descripciondep = $("#descripciondep").val();
        var imagendep = $("#imagendep").val();
        $.ajax({
            url:"/gestor/gestor/ajaxDependencia",
            method:'POST',
            data:{
            "_token":"{{ csrf_token() }}",
            nombredep:nombredep,
            director:director,
            url:url,
            descripciondep:descripciondep,
            imagendep:imagendep
            },
            success:function(data){
                console.log('se agrego');
        }
        });
    });
});
</script>
<script>
$(document).ready(function(){
    $(".juventud").click(function(){
        var form = "";
        var titulo = $("#titlejuventud");
        var body = $("#bodyjuventud");
        form+='<form><div class="row">';
       form+='<div class="col"><input type="text" class="form-control" placeholder="Titulo de la Noticia"  id="titulo"></div></div>';
       form+='<div class="row mt-4"><div class="col"><input type="text" class="form-control" placeholder="Autor"  id="autor"></div><div class="col"><input type="date" class="form-control" id="fecha"></div></div></form>';
       form+='<div class="row mt-4"><div class="col"><textarea rows="4" class="form-control" placeholder="Descrpicion" id="descripcionjuv"></textarea></div></div>';
       form+='<div class="row mt-4 justify-content-center"><input class="btn btn-info" name="uploadedfile" id="imagenjuv" type="file" /></div>';
       body.html(form);
       titulo.html('Agregar Noticias sobre la Juventud');
    });
    $("#rgJuv").click(function(){
        var titulo = $("#titulo").val();
        var autor = $("#autor").val();
        var fecha = $("#fecha").val();
        var descripcionjuv = $("#descripcionjuv").val();
        var imagenjuv = $("#imagenjuv").val();
        $.ajax({
            url:"/gestor/gestor/ajaxJuventud",
            method:'POST',
            data:{
            "_token":"{{ csrf_token() }}",
            titulo:titulo,
            autor:autor,
            fecha:fecha,
            descripcionjuv:descripcionjuv,
            imagenjuv:imagenjuv
            },
            success:function(data){
                console.log('se agrego Noticia de la Juventud');
        }
        });
    });
});
</script>
<script>
mostrardep = function(ids,depename,direc,descrip,urls,imagens){
  $('#ids').val(ids);
  $('#depename').val(depename);
  $('#direc').val(direc);
  $('#descrip').val(descrip);
  $('#urls').val(urls);
  $('imagens').val(imagens); 
};
</script>
<script>
mostrarjuv = function(idj,titjuv,autjuv,fechajuv,descripjuv,imagenjuv){
  $('#idj').val(idj);
  $('#titjuv').val(titjuv);
  $('#autjuv').val(autjuv);
  $('#fechajuv').val(fechajuv);
  $('#descripjuv').val(descripjuv);
  $('imagenjuv').val(imagenjuv); 
};
</script>
<script>
mostrarprog = function(idp,progname,namedepe,respo,despro,imagenpro){
  $('#idprog').val(idp);
  $('#progname').val(progname);
  $('#namedepe').val(namedepe);
  $('#respo').val(respo);
  $('#descriprograma').val(despro);
  $('#imagenprograma').val(imagenpro); 
};
</script>
<script>
mostrarevento = function(ide,titev,depev,lugar,deseve,imageneve){
  $('#idev').val(ide);
  $('#titev').val(titev);
  $('#depeve').val(depev);
  $('#lugar').val(lugar);
  $('#descripeven').val(deseve);
  $('#imageneve').val(imageneve); 
};
</script>
<script>
mostrarnoticia = function(idn,titnot,autornot,fechanot,desnot,imagenot){
  $('#idnoti').val(idn);
  $('#titnoti').val(titnot);
  $('#autonoti').val(autornot);
  $('#fechanoti').val(fechanot);
  $('#descripnoti').val(desnot);
  $('#imagenoti').val(imagenot); 
};
</script>
<script>
$(document).ready(function(){
  $("#edit").click(function(){
    var id = $("#ids").val();
    var nombredep = $("#depename").val();
    var director = $("#direc").val();
    var descripciondep = $("#descrip").val();
    var url = $("#urls").val();
    var imagendep = $("#imagens").val();
    $.ajax({
      url:'/gestor/gestor/ajaxDependencia/'+id,
            method:'POST',
            data:{
            "_token":"{{ csrf_token() }}",
            nombredep:nombredep,
            director:director,
            descripciondep:descripciondep,
            url:url,
            imagendep:imagendep
            },
            success:function(data){
                console.log('se modifico la Dependencia');
        }
    });
  });
});
</script>
<script>
$(document).ready(function(){
  $("#editprog").click(function(){
    var id = $("#idprog").val();
    var nomprog = $("#progname").val();
    var nomdep = $("#namedepe").val();
    var responsable = $("#respo").val();
    var descriprog = $("#descriprograma").val();
    var imagenprog = $("#imagenprograma").val();
    $.ajax({
      url:'/gestor/gestor/ajaxPrograma/'+id,
            method:'POST',
            data:{
            "_token":"{{ csrf_token() }}",
            nomprog:nomprog,
            nomdep:nomdep,
            responsable:responsable,
            descriprog:descriprog,
            imagenprog:imagenprog
            },
            success:function(data){
                console.log('se modifico el Programa');
        }
    });
  });
});
</script>
<script>
$(document).ready(function(){
  $("#editjuv").click(function(){
    var id = $("#idj").val();
    var titulo = $("#titjuv").val();
    var autor = $("#autjuv").val();
    var fecha = $("#fechajuv").val();
    var descripcionjuv = $("#descripjuv").val();
    var imagenjuv = $("#imagenjuv").val();
    $.ajax({
      url:'/gestor/gestor/ajaxJuventud/'+id,
            method:'POST',
            data:{
            "_token":"{{ csrf_token() }}",
            titulo:titulo,
            autor:autor,
            fecha:fecha,
            descripcionjuv:descripcionjuv,
            imagenjuv:imagenjuv
            },
            success:function(data){
                console.log('se modifico la Noticia de Juventud');
        }
    });
  });
});
</script>
<script>
$(document).ready(function(){
  $('#editcarru').click(function(){
    var ids = 1;
    var imagen1 = $("#imagen1").val();
    var urlimagen1 = $("#urlimagen1").val();
    var imagen2 = $("#imagen2").val();
    var urlimagen2 = $("#urlimagen2").val();
    var imagen3 = $("#imagen3").val();
    var urlimagen3 = $("#urlimagen3").val();
    var imagen4 = $("#imagen4").val();
    var urlimagen4 = $("#urlimagen4").val();
    var imagen5 = $("#imagen5").val();
    var urlimagen5 = $("#urlimagen5").val();
    $.ajax({
      url:'/gestor/gestor/ajaxCarrusel'+ids,
      method:'POST',
      data:{
        "_token":"{{ csrf_token() }}",
        imagen1:imagen1,
        urlimagen1:urlimagen1,
        imagen2:imagen2,
        urlimagen2:urlimagen2,
        imagen3:imagen3,
        urlimagen3:urlimagen3,
        imagen4:imagen4,
        urlimagen4:urlimagen4,
        imagen5:imagen5,
        urlimagen5:urlimagen5
      },
      success:function(data){
        $("#editarcarrusel").modal("hide");
      }
    });
  });
});
</script>
<script>
$(document).ready(function(){
  $("#borrarprog").click(function(){
    var id = $("#idprog").val();
    $.ajax({
      url: '/gestor/gestor/ajaxPrograma/'+id,
      method:'POST',
      data:{
      "_token":"{{ csrf_token() }}"
      },
      success:function(data){
        console.log("se borro el programa");
      }
    });
  });
});
</script>
<script>
$(document).ready(function(){
  $("#borrarjuv").click(function(){
    var id = $("#idj").val();
    $.ajax({
      url: '/gestor/gestor/ajaxJuventud/'+id,
      method:'POST',
      data:{
      "_token":"{{ csrf_token() }}"
      },
      success:function(data){
        console.log("se borro la noticia de Juventud");
      }
    });
  });
});
</script>
<script>
$(document).ready(function(){
  $("#borrardepe").click(function(){
    var id = $("#ids").val();
    var nomdep = $("#depename").val();
    $.ajax({
      url: '/gestor/gestor/ajaxDependencia/'+id+'/'+nomdep,
      method:'POST',
      data:{
      "_token":"{{ csrf_token() }}",
      },
      success:function(data){
        console.log("se borro la noticia de Dependencia");
      }
    });
  });
});
</script>
<script>
$(document).ready(function(){
  $("#editnoti").click(function(){
    var id = $("#idnoti").val();
    var titulonoti = $("#titnoti").val();
    var autornoti = $("#autonoti").val();
    var fechanoti = $("#fechanoti").val();
    var Descripcionnot = $("#descripnoti").val();
    var imagennoti = $("#imagenoti").val();
    $.ajax({
      url:'/gestor/gestor/ajaxNoticia/'+id,
            method:'POST',
            data:{
            "_token":"{{ csrf_token() }}",
            titulonoti:titulonoti,
            autornoti:autornoti,
            fechanoti:fechanoti,
            Descripcionnot:Descripcionnot,
            imagennoti:imagennoti
            },
            success:function(data){
                console.log('se modifico la Noticia');
                
        }
    });
  });
});
</script>
<script>
$(document).ready(function(){
  $("#editevento").click(function(){
    var id = $("#idev").val();
    var tituloev = $("#titev").val();
    var depev = $("#depeve").val();
    var lugar = $("#lugar").val();
    var Descripcionev = $("#descripeven").val();
    var imagenjuv = $("#imageneve").val();
    $.ajax({
      url:'/gestor/gestor/ajaxEvento/'+id,
            method:'POST',
            data:{
            "_token":"{{ csrf_token() }}",
            tituloev:tituloev,
            depev:depev,
            lugar:lugar,
            Descripcionev:Descripcionev,
            imagenjuv:imagenjuv
            },
            success:function(data){
                console.log('se modifico la Noticia de Juventud');
        }
    });
  });
});
  $('#envImg').click( function() {
  // agrego la data del form a formData
  var formData = new FormData();
  formData.append('imagen1', $('input[name=imagen1]')[0].files[0]);
  formData.append('imagen2', $('input[name=imagen2]')[0].files[0]);
  formData.append('imagen3', $('input[name=imagen3]')[0].files[0]);
  formData.append('imagen4', $('input[name=imagen4]')[0].files[0]);
  formData.append('imagen5', $('input[name=imagen5]')[0].files[0]);
  formData.append('urlimagen1', $('#urlimagen1').val());
  formData.append('urlimagen2', $('#urlimagen2').val());
  formData.append('urlimagen3', $('#urlimagen3').val());
  formData.append('urlimagen4', $('#urlimagen4').val());
  formData.append('urlimagen5', $('#urlimagen5').val());
  formData.append('_token','{{ csrf_token() }}');
  $.ajax({
      type:'POST',
      url: '/gestor/gestor/imagenesAjax',
      data:formData,
      cache:false,
      contentType: false,
      processData: false,
      success:function(data){
      alert(data);
      }
  });
});
});

</script>
</body>
</html>