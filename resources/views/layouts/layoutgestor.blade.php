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
    <nav class="navbar navbar-expand-sm" style="background: #EEEE">
        <div class="container">
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><span id="lafecha" class="fecha-actual"></span></li>
            </ul>
            <ul class="nav navbar-nav ml-auto w-50 justify-content-end">
               <li><span class="form-control-static">Siguenos</span></li>
                <li><a href="https://www.facebook.com/GobEdoBCS/" target="_blank"><img src="http://www.bcs.gob.mx/wp-content/themes/bcsgob-wp/assets/images/icono-facebook.png"><span class="sr-only">Facebook</span></a></li>
                <li><a href="https://twitter.com/GobBCS" target="_blank"><img src="http://www.bcs.gob.mx/wp-content/themes/bcsgob-wp/assets/images/icono-twitter.png"><span class="sr-only">Twitter</span></a></li>
                <li><a href="https://instagram.com/gobiernobcs/" target="_blank"><img src="http://www.bcs.gob.mx/wp-content/themes/bcsgob-wp/assets/images/icono-instagram.png"><span class="sr-only">Instagram</span></a></li>
                <li><a href="https://www.youtube.com/channel/UC0KrSRyYv3migvbasXzNJpQ" target="_blank"> <img src="http://www.bcs.gob.mx/wp-content/themes/bcsgob-wp/assets/images/icono-youtube.png"><span class="sr-only">YouTube</span></a></li>
            </ul>
            <ul class="dropdown">
                <a style="color:black;" class="dropdown-toggle" data-toggle="dropdown" href="#">{{Auth::user()->name}}
                    <i style="color:black;" class="fa fa-user"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a style="color:black;" href="#" class="fa fa-user "> {{ Auth::user()->email }}</a>
                    </li>
                    <li><a class="dropdown-item" href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesión') }}
                        </a>
                    </li>
                </ul>
            </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <nav class="navbar">
            <a class="menu-logo" href="/">
                <img src="http://www.bcs.gob.mx/wp-content/themes/bcsgob-wp/assets/images/logo-gobbcs.png" alt="Gobierno de Baja California Sur 2015-2021 | Mejor Futuro"> 
                <!-- <img src="http://www.bcs.gob.mx/wp-content/uploads/2018/03/logo-gbcs.jpg" alt="Gobierno de Baja California Sur 2015-2021 | Mejor Futuro"> -->
            </a>
        </nav>
        <nav id="barranavegacion" class="navbar navbar-expand-lg navbar-light bg-white shadow-sm p-3 mb-5 bg-white rounded">
        <a class="navbar-brand d-md-none" href="#">Menú</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto justify-content-center ">
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
                                <button data-id="{{$dependencia->id}}" id="{{$dependencia->id}}" class="dropdown-item dependencias" data-toggle="modal" data-target="#editardependencia" >{{$dependencia->nombredep}}</button>
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
                            <a class="dropdown-item enterate" data-id="1" data-toggle="modal" data-target="#agregarenterate" href="#">Enterate</a>
                            <a class="dropdown-item" href="{{route('Registros')}}">Registros Código Joven</a>
                            <a class="dropdown-item" data-toggle="modal" data-target="#agregarescuela" href="#">Registrar Escuela</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Juventud
                        </a>
                        <div class="dropdown-menu">
                        @if(App\Juventud::count()>0)
                          @foreach($juventudes as $juventud)
                          <button  data-id="{{$juventud->id}}" id="{{$juventud->id}}" class="dropdown-item juventudes" data-toggle="modal"  data-target="#editarjuventud" >{{$juventud->titulo}}</button>
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
                          <button data-id="{{$prog->id}}" id="{{$prog->id}}" class="dropdown-item programas" data-toggle="modal"  data-target="#editarprograma">{{$prog->nomprog}}</button>
                          @endforeach
                        @endif
                      <button class="dropdown-item programa" data-toggle="modal" data-target="#agregarprograma">Agregar Programa</button>
                    </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Eventos
                    </a>
                    <div class="dropdown-menu">
                      @if(App\Eventos::count()>0)
                          @foreach($eventos as $evento)
                          <button id="{{$evento->id}}" class="dropdown-item evento" data-toggle="modal" data-target="#editarevento" data-id="{{$evento->id}}">{{$evento->tituloev}}</button>
                          @endforeach
                        @endif
                      <button class="dropdown-item even" data-toggle="modal" data-target="#agregarevento">Agregar Evento</button>
                    </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Noticias
                    </a>
                    <div class="dropdown-menu">
                      @if(App\Noticias::count()>0)
                          @foreach($noticias as $notici)
                          <button id="{{$notici->id}}" class="dropdown-item noticias" data-toggle="modal" data-target="#editarnoticiaprueba" data-id="{{$notici->id}}">{{$notici->titulonoti}}</button>
                          @endforeach
                        @endif
                      <button class="dropdown-item noti" data-toggle="modal" data-target="#agregarnoticia">Agregar Noticia</button>
                    </div>
                    </li>
                </ul>
            </div>
        </nav> 
    </div>
</header>
 
 @yield('content')

 <footer style="background:white;" class="page-footer font-small pt-4">
 <!-- Footer Links -->
     <div class="container-fluid text-center text-md-left">
   <!-- Grid row -->
         <div class="row">
             <div class="col-md-3">
                 <img src="http://isjuventud.gob.mx/wp-content/themes/PortalesBCS/assets/images/logo-estado-mejor-futuro.png" alt="">
             </div>  
             <div class="col-md-6">
                 <div class="info-domicilio">
                     <h5> Instituto Sudcaliforniano de la Juventud</h5>
                     Calle Antonio Navarro, esq. Melitón Albáñez <br>
                     La Paz, Baja California Sur, México         
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="medios-de-comunicacion">
                     Conmutador (612) 125 3767 <br>
                     <a href="http://www.facebook.com/isjbcs">Contactanos vía web</a>
                 </div>
             </div>
         </div>
   <!-- Grid row -->
     </div>
 <!-- Footer Links -->
 <!-- Copyright -->
     <div style="background:#EEEEEE;" class="footer-copyright text-center py-2"><p class="copy">Algunos derechos reservados © 2015 - 2021</p>
     </div>
 <!-- Copyright -->
 </footer>
 <style>
     html {
   min-height: 100%;
   position: relative;
 }
 body {
   margin: 0;
   margin-bottom: 40px;
 }
 footer {
   position: absolute;
   bottom: 0;
   width: 100%;
   height: 40px;
 }
 </style>
 <div class="modal fade" id="editarprograma" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleProg"></h5>
        <button type="button" class="close" data-dismiss="modal2" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formprog" enctype="multipart/form-data" class="needs-validation" novalidate>
        <div class="modal-body" id="bodyProg">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-outline-warning" id="borrarprog">Eliminar</button>
          <button type="button" class="btn btn-outline-success" id="editprog">Aceptar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="editarjuventud" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleJuve"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form enctype="multipart/form-data" id="formjuve" class="needs-validation" novalidate>
        <div class="modal-body" id="bodyJuve">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-outline-warning" id="borrarjuv">Eliminar</button>
          <button type="button" class="btn btn-outline-success" id="editjuv">Aceptar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="editardependencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleDep"></h5>
        <button type="button" class="close" data-dismiss="modal2" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form id="formdep" enctype="multipart/form-data" class="needs-validation" novalidate>
        <div class="modal-body" id="bodyDep">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-outline-warning" id="borrardepe">Eliminar</button>
          <button type="button" class="btn btn-outline-success" id="edit">Aceptar</button>
        </div>
      </form>
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
          <div class="row">
              <div class="col">
                Primer Titulo<input  id="titsite1" placeholder="Titulo Primera Imagen" type="text" class="form-control" value="{{$carrusel->titsite1}}">
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
          <div class="row">
              <div class="col">
                Segundo Titulo<input id="titsite2" placeholder="Titulo Segunda Imagen" type="text" class="form-control" value="{{$carrusel->titsite2}}">
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
          <div class="row">
              <div class="col">
                Tercer Titulo<input id="titsite3" placeholder="Titulo Tercera Imagen" type="text" class="form-control" value="{{$carrusel->titsite3}}">
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
          <div class="row">
              <div class="col">
                Cuarto Titulo<input id="titsite4" placeholder="Titulo Cuarta Imagen" type="text" class="form-control" value="{{$carrusel->titsite4}}">
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
          <div class="row">
              <div class="col">
                Quinto Titulo<input id="titsite5" placeholder="Titulo Quinta Imagen" type="text" class="form-control" value="{{$carrusel->titsite5}}" required>
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
<div class="modal fade" id="msjsis" tabindex="-1" role="dialog" aria-label="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalLabel">
                    Mensaje del Sistema
                </h4>
                <button type="button" class="close" data-dismiss="modal" id="" name="" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="msjbody">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary lead" id="" name="" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="msjeli" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mensaje</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Seguro que desea eliminar
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-danger" name="eliminar" id="eliminarRegistro" data-dismiss="modal">Confirmar</button>
                        
                    </div>
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
    <form id="formrgp" enctype="multipart/form-data" class="needs-validation" novalidate>
        <div class="modal-body" id="bodyprograma">
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-outline-success" id="rgProg">Aceptar</button>
        </div>
      </form>
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
    <form id="formrgd" enctype="multipart/form-data" class="needs-validation" novalidate>
      <div class="modal-body" id="body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-success" id="rgDep">Aceptar</button>
      </div>
      </form>
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
      <form id="formrgj" enctype="multipart/form-data" class="needs-validation" novalidate>
      <div class="modal-body" id="bodyjuventud">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-success" id="rgJuv">Aceptar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="editarevento" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titlevento"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form id="form" class="needs-validation" novalidate>
      <div class="modal-body" id="bodyModalevento">    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-success" id="editevento">Aceptar</button>
      </div>
    </form>
    </div>
  </div>
</div>
<div class="modal fade" id="editarnoticiaprueba" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titlenotiprueba"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form  enctype="multipart/form-data" id="formnoti" class="needs-validation" novalidate>
      <div class="modal-body" id="bodynotiprueba">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-success" id="editnoti">Aceptar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="agregarevento" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleve"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formevento" enctype="multipart/form-data" class="needs-validation" novalidate>
      <div class="modal-body" id="bodyeve">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-success" id="rgEve">Aceptar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="agregarnoticia" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titlenot"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formnoticia" enctype="multipart/form-data" class="needs-validation" novalidate>
      <div class="modal-body" id="bodynot">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-success" id="rgNot">Aceptar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="agregarenterate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleenterate"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyenterate">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-success" id="rgNot">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="agregarescuela" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleesc">Registrar Escuela</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyesc">
        <div class="row">
            <div class="col">
              <label for="Nombre Escuela">Nombre Escuela</label><input type="text" class="form-control" id="escuelaname">
            </div>
            <div class="col">
              <label for="Escolaridad">Escolaridad</label><select class="form-control" id="escolaridad">
                <option value="Kinder">Kinder</option>
                <option value="Primaria">Primaria</option>
                <option value="Secundaria">Secundaria</option>
                <option value="Preparatoria">Preparatoria</option>
                <option value="Universidad">Universidad</option>
              </select>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-success" id="rgEsc">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
  $("#rgEsc").click(function(){
    var nombre_escuela = $("#escuelaname").val();
    var escolaridad = $("#escolaridad").val();
    $.ajax({
      type:'POST',
      url:'/gestor/gestor/ajaxEscuela',
      data:{
        "_token":"{{ csrf_token() }}",
        nombre_escuela:nombre_escuela,
        escolaridad:escolaridad,
      },
      success:function(data){
        $("#agregarescuela").modal("hide");
        alert(data);
      }
    });
  });
});
</script>
<script>
 $(document).ready(function(){
  $(".enterate").click(function(){
    var id = $(this).attr("data-id");
    $.ajax({
      type:"GET",
      url:'/gestor/gestor/ajaxEnterate/'+id,
      dataType: "json",
      data:{
      "_token":"Vwa7Moz1zujWKN1AAAmP5Ra00rRvf3jdE7N69Dej"
      },
      success:function(data){
        var form = "";
        var titulo = $("#titleenterate");
        var body = $("#bodyenterate");
        form+='<form><div class="row">';
       form+='<div class="col"><input value="'+data[0]+'" "type="text" class="form-control" placeholder="Id"  id="idnoti" disabled></div><div class="col"><input type="text" value="'+data[1]+'" class="form-control" placeholder="Titulo Noticia"  id="titnoti" required><div class="invalid-feedback">Ingresa un Titulo</div></div></div>';
       form+='<div class="row mt-3"><div class="col"><textarea rows="4" class="form-control" placeholder="Descrpicion" id="descripnoti">'+data[2]+'</textarea></div></div>';
       form+='<div class="row mt-3"><div class="col"><textarea rows="4" class="form-control" placeholder="Descrpicion" id="descripnoti">'+data[3]+'</textarea></div></div>';
       form+='<div class="row mt-3"><div class="col"><textarea rows="4" class="form-control" placeholder="Descrpicion" id="descripnoti">'+data[4]+'</textarea></div></div></form>';
       form+='<br><div justify-content-center><input value="'+data[5]+'" class="form-control"  type="text" ></div>';
       body.html(form);
       titulo.html('Editar Enterate');
      }
    });
  });
}); 
</script>
<script>
var $codigoEliminar = 0;
$(borrar());
function borrar(){
  $(document).on("click","#borrar",function(){
		var cod = $(this).attr("data-id");
		codigoEliminar = cod;
	});	

	$(document).on("click","#eliminarRegistro",function(){
		var id = codigoEliminar;
		$.ajax({
        type:"POST",
        url:'/codigojoven/Registros/ajaxElim/'+id,
        data:{
          "_token":"{{ csrf_token() }}",
				},
				success: function (data){
					$("#msjbody").text(data);
          $("#msjsis").modal("show");
          location.reload();

				}
			});
		
    });
}
</script>
<script type = "text/javascript">
$(document).ready(function(){
    $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });
$("#idev").change(function(){
    var id = $("#idev").val();
    $.ajax({
                type:'GET',
                url:'/gestor/gestor/ajaxEve/'+id,
                dataType: "json",
                success:function(data) {
                $("#titev").val(data[0]);
                $("#depeve").val(data[1]);
                $("#lugar").val(data[2]);
                $("#descripeven").val(data[3]);
               },
      });
  });
});
</script>
<script>
  $(document).ready(function(){
    $(".noti").click(function(){
        var form = "";
        var titulo = $("#titlenot");
        var body = $("#bodynot");
        form+='<form><div class="row">';
       form+='<div class="col"><input type="text" class="form-control" placeholder="Titulo Noticia"  id="titulonoticia" required><div class="invalid-feedback">Ingresa un Titulo</div></div></div>';
       form+='<div class="row mt-4"><div class="col"><input type="text" class="form-control" placeholder="Autor"  id="autornoticia" required><div class="invalid-feedback">Ingresa un Autor</div></div><div class="col"><input type="date" class="form-control" id="fechanoticia" required><div class="invalid-feedback">Ingresa una fecha</div></div></div></form>';
       form+='<div class="row mt-4"><div class="col"><textarea rows="4" class="form-control" placeholder="Descrpicion" id="descripcionnoticia"></textarea></div></div>';
       form+='<div class="row mt-4 justify-content-center"><input class="btn btn-info" name="imagennoticia" id="imagennoticia" type="file" /></div>';
       body.html(form);
       titulo.html('Agregar Noticia');
    });
    $("#rgNot").click(function(){
        var formData = new FormData();
        formData.append('titulonoti',$("#titulonoticia").val());
        formData.append('autornoti',$("#autornoticia").val());
        formData.append('fechanoti',$("#fechanoticia").val());
        formData.append('Descripcionnoti',$("#descripcionnoticia").val());
        formData.append('imagennoti',$('input[name=imagennoticia]')[0].files[0]);
        formData.append('_token','{{ csrf_token() }}');
        if ($('#formnoticia')[0].checkValidity() === false) {
            event.stopPropagation();
        } else {
        $.ajax({
            type:'POST',
            url:"/gestor/gestor/ajaxNot",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
            $("#agreganoticia").modal("hide");
            location.reload();
            alert(data);
        }
        });
        }
        $('#formnoticia').addClass('was-validated');
    });
});
</script>
<script>
  $(document).ready(function(){
    $(".even").click(function(){
        var form = "";
        var titulo = $("#titleve");
        var body = $("#bodyeve");
        form+='<form><div class="row">';
       form+='<div class="col"><input type="text" class="form-control" placeholder="Titulo Evento"  id="tituloev" required><div class="invalid-feedback">Ingresa un Titulo</div></div></div>';
       form+='<div class="row mt-4"><div class="col"><input type="text" class="form-control" placeholder="Dependecia"  id="depevento" required><div class="invalid-feedback">Ingresa una Dependencia</div></div><div class="col"><input type="text" class="form-control" placeholder="Lugar" id="lugares" required><div class="invalid-feedback">Ingresa un Lugar</div></div></div></form>';
       form+='<div class="row mt-4"><div class="col"><textarea rows="4" class="form-control" placeholder="Descrpicion" id="descripcionevento"></textarea></div></div>';
       form+='<div class="row mt-4 justify-content-center"><input class="btn btn-info" name="imagenevento" id="imagenevento" type="file" /></div>';
       body.html(form);
       titulo.html('Agregar Evento');
    });
    $("#rgEve").click(function(){
        var formData = new FormData();
        formData.append('tituloev',$("#tituloev").val());
        formData.append('depev',$("#depevento").val());
        formData.append('lugar',$("#lugares").val());
        formData.append('Descripcionev',$("#descripcionevento").val());
        formData.append('imagenjuv',$('input[name=imagenevento]')[0].files[0]);
        formData.append('_token','{{ csrf_token() }}');
        if ($('#formevento')[0].checkValidity() === false) {
            event.stopPropagation();
        } else {
        $.ajax({
            type:'POST',
            url:"/gestor/gestor/ajaxEvent",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
            $("#agregarevento").modal("hide");
            location.reload();
            alert(data);
        }
        });
        }
        $('#formevento').addClass('was-validated');
    });
});
</script>
<script>
$(document).ready(function(){
  $(".programa").click(function(){
        var form = "";
        var titulo = $("#titleprograma");
        var body = $("#bodyprograma");
        form+='<form><div class="row">';
       form+='<div class="col"><input type="text" class="form-control" placeholder="Nombre del Programa"  id="nomprog" required><div class="invalid-feedback">Ingresa un Nombre</div></div></div>';
       form+='<div class="row mt-4"><div class="col"><select class="form-control" id="nomdep" required>@if (App\Dependencias::count() > 0) @foreach($dependencias as $dependencia) <option>{{$dependencia->nombredep}}</option> @endforeach @endif</select></div><div class="col"><input type="text" class="form-control" placeholder="Responsable"  id="responsable" required><div class="invalid-feedback">Ingresa un Responsable</div></div></div></form>';
       form+='<div class="row mt-4"><div class="col"><textarea rows="4" class="form-control" placeholder="Descrpicion" id="descriprog"></textarea></div></div>';
       form+='<div class="row mt-4 justify-content-center"><input class="btn btn-info" name="imagenprog" id="imagenprog" type="file" /></div>';
       body.html(form);
       titulo.html('Agregar Programa');
    });
    $("#rgProg").click(function(){
        var formData = new FormData();
        formData.append('nomprog',$("#nomprog").val());
        formData.append('nomdep',$("#nomdep").val());
        formData.append('responsable',$("#responsable").val());
        formData.append('descriprog',$("#descriprog").val());
        formData.append('imagenprog',$('input[name=imagenprog]')[0].files[0]);
        formData.append('_token','{{ csrf_token() }}');
        if ($('#formrgp')[0].checkValidity() === false) {
            event.stopPropagation();
        } else {
          $.ajax({
              type:'POST',
              url:"/gestor/gestor/ajaxProgramas",
              data:formData,
              cache:false,
              contentType: false,
              processData: false,
              success:function(data){
              $("#agregarprograma").modal("hide");
              location.reload();
              alert(data);
          }
          });
        }
        $('#formrgp').addClass('was-validated');
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
       form+='<div class="col"><input type="text" class="form-control" placeholder="Nombre de la Dependencia"  id="nombredep" required><div class="invalid-feedback">Ingresa una Dependencia</div></div></div>';
       form+='<div class="row mt-4"><div class="col"><input type="text" class="form-control" placeholder="Director"  id="director" required><div class="invalid-feedback">Ingresa un Director</div></div><div class="col"><input type="text" class="form-control" placeholder="url" id="url" required><div class="invalid-feedback">Ingresa una Url</div></div></div></form>';
       form+='<div class="row mt-4"><div class="col"><textarea rows="4" class="form-control" placeholder="Descrpicion" id="descripciondep"></textarea></div></div>';
       form+='<div class="row mt-4 justify-content-center"><input class="btn btn-info" name="imagendep" id="imagendep" type="file" /></div>';
       body.html(form);
       titulo.html('Agregar Dependencia');
    });
    $("#rgDep").click(function(){
        var formData = new FormData();
        formData.append('nombredep',$("#nombredep").val());
        formData.append('director',$("#director").val());
        formData.append('url',$("#url").val());
        formData.append('descripciondep',$("#descripciondep").val());
        formData.append('imagendep',$('input[name=imagendep]')[0].files[0]);
        formData.append('_token','{{ csrf_token() }}');
        if ($('#formrgd')[0].checkValidity() === false) {
            event.stopPropagation();
        } else {
        $.ajax({
            type:'POST',
            url:"/gestor/gestor/ajaxDependencia",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
            $("#agregardependencia").modal("hide");
            location.reload();
            alert(data);
        }
        });
        }
        $('#formrgd').addClass('was-validated');
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
       form+='<div class="col"><input type="text" class="form-control" placeholder="Titulo de la Noticia"  id="titulo" required><div class="invalid-feedback">Ingresa un Titulo</div></div></div>';
       form+='<div class="row mt-4"><div class="col"><input type="text" class="form-control" placeholder="Autor"  id="autor" required><div class="invalid-feedback">Ingresa un Autor</div></div><div class="col"><input type="date" class="form-control" id="fecha" required><div class="invalid-feedback">Ingresa una Fecha</div></div></div></form>';
       form+='<div class="row mt-4"><div class="col"><textarea rows="4" class="form-control" placeholder="Descrpicion" id="descripcionjuv"></textarea></div></div>';
       form+='<div class="row mt-4 justify-content-center"><input class="btn btn-info" name="imagenjuve" id="imagenjuve" type="file" /></div>';
       body.html(form);
       titulo.html('Agregar Noticias sobre la Juventud');
    });
    $("#rgJuv").click(function(){
        var formData = new FormData();
        formData.append('titulo',$("#titulo").val());
        formData.append('autor',$("#autor").val());
        formData.append('fecha',$("#fecha").val());
        formData.append('descripcionjuv',$("#descripcionjuv").val());
        formData.append('imagenjuv',$('input[name=imagenjuve]')[0].files[0]);
        formData.append('_token','{{ csrf_token() }}');
        if ($('#formrgj')[0].checkValidity() === false) {
            event.stopPropagation();
        } else {
        $.ajax({
            type:'POST',
            url:"/gestor/gestor/ajaxJuventud",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
            $("#agregarjuventud").modal("hide");
            location.reload();
            alert(data);
            
        }
        });
        }
        $('#formrgj').addClass('was-validated');
    });
});
</script>
<script>
$(document).ready(function(){
  $("#edit").click(function(){
    var formData = new FormData();
    var id = $("#ids").val();
    formData.append('nombredep',$("#depename").val());
    formData.append('director',$("#direc").val());
    formData.append('descripciondep',$("#descrip").val());
    formData.append('url',$("#urls").val());
    formData.append('imagendep',$('input[name=imagens]')[0].files[0]);
    formData.append('_token','{{ csrf_token() }}');
    if ($('#formdep')[0].checkValidity() === false) {
            event.stopPropagation();
        } else {
          $.ajax({
                  type:'POST',
                  url:'/gestor/gestor/ajaxDependencias/'+id,
                  data:formData,
                  cache:false,
                  contentType: false,
                  processData: false,
                  success:function(data){
                  $("#editardependencia").modal("hide");
                  location.reload();
                  alert(data);
              }
          });
        }
        $('#formdep').addClass('was-validated');
  });
});
</script>
<script>
$(document).ready(function(){
  $("#editprog").click(function(){
    var formData = new FormData();
    var id = $("#idprog").val();
    formData.append('nomprog',$("#progname").val());
    formData.append('nomdep',$("#namedepe").val());
    formData.append('responsable',$("#respo").val());
    formData.append('descriprog',$("#descriprograma").val());
    formData.append('imagenprog',$('input[name=imagenprograma]')[0].files[0]);
    formData.append('_token','{{ csrf_token() }}');
    if ($('#formprog')[0].checkValidity() === false) {
            event.stopPropagation();
        } else {
          $.ajax({
                  type:'POST',
                  url:'/gestor/gestor/ajaxProgramas/'+id,
                  data:formData,
                  cache:false,
                  contentType: false,
                  processData: false,
                  success:function(data){
                  $("#editarprograma").modal("hide");
                  location.reload();
                  alert(data);
              }
          });
        }
        $('#formprog').addClass('was-validated');
  });
});
</script>
<script>
$(document).ready(function(){
  $("#editjuv").click(function(){
    var formData = new FormData();
    var id = $("#idj").val();
    formData.append('titulo',$("#titjuv").val());
    formData.append('autor',$("#autjuv").val());
    formData.append('fecha',$("#fechajuv").val());
    formData.append('descripcionjuv',$("#descripjuv").val());
    formData.append('imagenjuv',$('input[name=imagenjuv]')[0].files[0]);
    formData.append('_token','{{ csrf_token() }}');
    if ($('#formjuve')[0].checkValidity() === false) {
            event.stopPropagation();
        } else {
          $.ajax({
                  type:'POST',
                  url:'/gestor/gestor/ajaxJuventudes/'+id,
                  data:formData,
                  cache:false,
                  contentType: false,
                  processData: false,
                  success:function(data){
                  $("#editarjuventud").modal("hide");
                  location.reload();
                  alert(data);
              }
          });
        }
        $('#formjuve').addClass('was-validated');
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
        $("#editarprograma").modal("hide");
        location.reload();
        alert(data);
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
        $("#editarjuventud").modal("hide");
        location.reload();
        alert(data);
      }
    });
  });
});
</script>
<script>
$(document).ready(function(){
  $("#borrardepe").click(function(){
    var id = $("#ids").val();
    $.ajax({
      url: '/gestor/gestor/ajaxDependencia/'+id,
      method:'POST',
      data:{
      "_token":"{{ csrf_token() }}",
      },
      success:function(data){
      $("#editardependencia").modal("hide");
      location.reload();
      alert(data);
      }
    });
  });
});
</script>
<script>
  $(document).ready(function(){
    $(".programas").click(function(){
      var id = $(this).attr("data-id");
      $.ajax({
        type:"GET",
        url:'/gestor/gestor/ajaxProg/'+id,
        dataType: "json",
        data:{
          "_token":"Vwa7Moz1zujWKN1AAAmP5Ra00rRvf3jdE7N69Dej"
        },
        success:function(data){
        var form = "";
        var titulo = $("#titleProg");
        var body = $("#bodyProg");
        form+='<form><div class="row">';
       form+='<div class="col"><input value="'+data[0]+'" type="text" class="form-control" placeholder="Id"  id="idprog" disabled></div><div class="col"><input value="'+data[1]+'" type="text" class="form-control" placeholder="Nombre del Programa"  id="progname" required><div class="invalid-feedback">Ingresa un Nombre</div></div></div>';
       form+='<div class="row mt-4"><div class="col"><select class="form-control" id="namedepe" required>@if (App\Dependencias::count() > 0) @foreach($dependencias as $dependencia) <option>{{$dependencia->nombredep}}</option> @endforeach @endif</select></div><div class="col"><input value="'+data[3]+'" type="text" class="form-control" placeholder="Responsable"  id="respo" required><div class="invalid-feedback">Ingresa un Responsable</div></div></div></form>';
       form+='<div class="row mt-4"><div class="col"><textarea rows="4" class="form-control" placeholder="Descrpicion" id="descriprograma">'+data[4]+'</textarea></div></div>';
       form+='<div class="row mt-4 justify-content-center"><input class="btn btn-info" name="imagenprograma" id="imagenprograma" type="file" /></div>';
       body.html(form);
       titulo.html('Editar Programa');
       $("#namedepe").val(data[2]);
        }
      });
    });
  });
</script>
<script>
$(document).ready(function(){
  $(".juventudes").click(function(){
    var id = $(this).attr("data-id");
    $.ajax({
      type:"GET",
      url:'/gestor/gestor/ajaxJuve/'+id,
      dataType: "json",
      data:{       
      "_token":"Vwa7Moz1zujWKN1AAAmP5Ra00rRvf3jdE7N69Dej"
      },
      success:function(data){
        var form = "";
        var titulo = $("#titleJuve");
        var body = $("#bodyJuve");
        form+='<form><div class="row">';
       form+='<div class="col"><input value="'+data[0]+'" type="text" class="form-control" placeholder="Id"  id="idj" disabled></div><div class="col"><input value="'+data[1]+'" type="text" class="form-control" placeholder="Titulo"  id="titjuv" required><div class="invalid-feedback">Ingresa un Autor</div></div></div>';
       form+='<div class="row mt-4"><div class="col"><input value="'+data[2]+'" class="form-control" placeholder="Autor"  id="autjuv" required><div class="invalid-feedback">Ingresa un Autor</div></div><div class="col"><input value="'+data[3]+'" type="date" class="form-control" placeholder="fecha"  id="fechajuv" required><div class="invalid-feedback">Ingresa una Fecha</div></div></div></form>';
       form+='<div class="row mt-4"><div class="col"><textarea rows="4" class="form-control" placeholder="Descrpicion" id="descripjuv">'+data[4]+'</textarea></div></div>';
       form+='<div class="row mt-4 justify-content-center"><input class="btn btn-info" name="imagenjuv" id="imagenjuv" type="file" /></div>';
       body.html(form);
       titulo.html('Editar Juventud');
      }
    });
  });
});
</script>
<script>
$(document).ready(function(){
  $(".dependencias").click(function(){
    var id = $(this).attr("data-id");
    $.ajax({
      type:"GET",
      url:'/gestor/gestor/ajaxDep/'+id,
      dataType: "json",
      data:{       
      "_token":"Vwa7Moz1zujWKN1AAAmP5Ra00rRvf3jdE7N69Dej"
      },
      success:function(data){
        var form = "";
        var titulo = $("#titleDep");
        var body = $("#bodyDep");
        form+='<form><div class="row">';
       form+='<div class="col"><input value="'+data[0]+'" type="text" class="form-control" placeholder="Id"  id="ids" disabled></div><div class="col"><input type="text" value="'+data[1]+'" class="form-control" placeholder="Dependencia"  id="depename" required><div class="invalid-feedback">Ingresa una Dependencia</div></div></div>';
       form+='<div class="row mt-4"><div class="col"><input value="'+data[2]+'" type="text" class="form-control" placeholder="Director"  id="direc" required><div class="invalid-feedback">Ingresa un Director</div></div><div class="col"><input value="'+data[3]+'" type="text" class="form-control" placeholder="Url"  id="urls" required><div class="invalid-feedback">Ingresa una Direccion URL</div></div></div></form>';
       form+='<div class="row mt-4"><div class="col"><textarea rows="4" class="form-control" placeholder="Descrpicion" id="descrip">'+data[4]+'</textarea></div></div>';
       form+='<div class="row mt-4 justify-content-center"><input class="btn btn-info" name="imagens" id="imagens" type="file" /></div>';
       body.html(form);
       titulo.html('Editar Dependencias');
      }
    });
  });
});
</script>
<script>
$(document).ready(function(){
  $(".noticias").click(function(){
    var id = $(this).attr("data-id");
    $.ajax({
      type:"GET",
      url:'/gestor/gestor/ajaxNoti/'+id,
      dataType: "json",
      data:{
      "_token":"Vwa7Moz1zujWKN1AAAmP5Ra00rRvf3jdE7N69Dej"
      },
      success:function(data){
        var form = "";
        var titulo = $("#titlenotiprueba");
        var body = $("#bodynotiprueba");
        form+='<form><div class="row">';
       form+='<div class="col"><input value="'+data[0]+'" "type="text" class="form-control" placeholder="Id"  id="idnoti" disabled></div><div class="col"><input type="text" value="'+data[1]+'" class="form-control" placeholder="Titulo Noticia"  id="titnoti" required><div class="invalid-feedback">Ingresa un Titulo</div></div></div>';
       form+='<div class="row mt-4"><div class="col"><input value="'+data[2]+'" type="text" class="form-control" placeholder="Autor"  id="autonoti" required><div class="invalid-feedback">Ingresa un Autor</div></div><div class="col"><input value="'+data[3]+'" type="date" class="form-control"  id="fechanoti" required><div class="invalid-feedback">Ingresa una Fecha</div></div></div></form>';
       form+='<div class="row mt-4"><div class="col"><textarea rows="4" class="form-control" placeholder="Descrpicion" id="descripnoti">'+data[4]+'</textarea></div></div>';
       form+='<div class="row mt-4 justify-content-center"><input class="btn btn-info" name="imagenoti" id="imagenoti" type="file" /></div>';
       body.html(form);
       titulo.html('Editar Noticias Prueba');
      }
    });
  });
});
</script>
<script>
$(document).ready(function(){
  $("#editnoti").click(function(){
    var formData = new FormData();
    var id = $("#idnoti").val();
    formData.append('titulonoti',$("#titnoti").val());
    formData.append('autornoti',$("#autonoti").val());
    formData.append('fechanoti',$("#fechanoti").val());
    var texto = $("#descripnoti").val();
    //var texto_linea = texto.replace(new RegExp("\n","g"), "<br>");
    formData.append('descripnoti',texto);
    formData.append('imagennoti',$('input[name=imagenoti]')[0].files[0]);
    formData.append('_token','{{ csrf_token() }}');
    if ($('#formnoti')[0].checkValidity() === false) {
            event.stopPropagation();
        } else {
    $.ajax({
            type:'POST',
            url:'/gestor/gestor/ajaxNoticia/'+id,
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
            alert(data);
            location.reload();
        }
    });
  }
        $('#formnoti').addClass('was-validated');
  });
});
</script>
<script>
  $(document).ready(function(){
  $(".evento").click(function(){
    var id = $(this).attr("data-id");
    $.ajax({
      type:"GET",
      url:'/gestor/gestor/ajaxEven/'+id,
      dataType: "json",
      data:{
      "_token":"Vwa7Moz1zujWKN1AAAmP5Ra00rRvf3jdE7N69Dej"
      },
      success:function(data){
        var form = "";
        var titulo = $("#titlevento");
        var body = $("#bodyModalevento");
        form+='<form><div class="row">';
       form+='<div class="col"><input value="'+data[0]+'" type="text" class="form-control" name="idev" id="idev" disabled></div><div class="col"><input type="text" value="'+data[1]+'" class="form-control" placeholder="Titulo Evento"  id="titev" required><div class="invalid-feedback">Ingresa un Titulo</div></div></div>';
       form+='<div class="row mt-4"><div class="col"><input value="'+data[2]+'" type="text" class="form-control" placeholder="Dependencia"  id="depeve" required><div class="invalid-feedback">Ingresa una Dependencia</div></div><div class="col"><input value="'+data[3]+'" type="text" class="form-control" placeholder="Lugar"  id="lugar" required><div class="invalid-feedback">Ingresa un Lugar</div></div></div></form>';
       form+='<div class="row mt-4"><div class="col"><textarea rows="4" class="form-control" placeholder="Descrpicion" id="descripeven">'+data[4]+'</textarea></div></div>';
       form+='<div class="row mt-4 justify-content-center"><input class="btn btn-info" name="imageneve" id="imageneve" type="file" /></div>';
       body.html(form);
       titulo.html('Editar Evento');
      }
    });
  });
});
</script>
<script>
$(document).ready(function(){
  $("#editevento").click(function(){
    var formData = new FormData();
    var id = $("#idev").val();
    formData.append('tituloev',$("#titev").val());
    formData.append('depev',$("#depeve").val());
    formData.append('lugar',$("#lugar").val());
    formData.append('Descripcionev',$("#descripeven").val());
    formData.append('imagenjuv',$('input[name=imageneve]')[0].files[0]);
    formData.append('_token','{{ csrf_token() }}');
    if ($('#form')[0].checkValidity() === false) {
            event.stopPropagation();
        } else {
            $.ajax({
                    type:'POST',
                    url:'/gestor/gestor/ajaxEvento/'+id,
                    data:formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    success:function(data){
                    alert(data);
                    location.reload();
                }
            });
        }
        $('#form').addClass('was-validated');
  });
});
</script>
<script>
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
      location.reload();
      alert(data);
      }
  });
});
</script>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
<script>
$(document).ready(function(){
    fecha();
});    
</script>
<script>
    function fecha(){
        var fecha = new Date();
        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        var mifecha = fecha.toLocaleDateString("es-ES", options);
        $("#lafecha").text(mifecha);
            }
</script>
</body>
</html>