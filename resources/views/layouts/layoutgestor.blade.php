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
    <script src="{{ asset('assets/js/Eventos.js')}}"></script>
    <script src="{{ asset('assets/js/Evento6.js')}}"></script>
    <script src="{{ asset('assets/js/Eventos2.js')}}"></script>
    <script src="{{ asset('assets/js/Eventos3.js')}}"></script>
    <script src="{{ asset('assets/js/Eventos4.js')}}"></script>
    <script src="{{ asset('assets/js/Eventos5.js')}}"></script>
    <script src="{{ asset('assets/js/Agregarevento3.js')}}"></script>
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
                                <button id="{{$dependencia->id}}" class="dropdown-item dependencia" data-toggle="modal" data-target="#modalEdicion2" onclick="mostrar('{{$dependencia->id}}','{{$dependencia->nombredep}}','{{$dependencia->director}}','{{$dependencia->descripciondep}}','{{$dependencia->url}}','{{$dependencia->imagendep}}');">{{$dependencia->nombredep}}</button>
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
                            <a class="dropdown-item" href="{{route('Notiedit')}}">Información</a>
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
                          <button id="this.{{$juventud->id}}" class="dropdown-item juventud" data-toggle="modal" data-target="#modalEdicion3" >{{$juventud->titulo}}</button>
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
                          <button id="{{$prog->id}}" class="dropdown-item programa" data-toggle="modal" data-target="#modalEdicion3">{{$prog->nomprog}}</button>
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
 <div class="modal fade" id="modalEdicion2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle2"></h5>
        <button type="button" class="close" data-dismiss="modal2" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModal2">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-success" id="rgDep">Aceptar</button>
      </div>
    </div>
  </div>
</div>  
<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModal">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-success">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalEdicion3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle3"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModal3">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-success">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalEdicion4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle4"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModal4">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-success">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalEdicion5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle5"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModal5">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-success">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalEdicion6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle6"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModal6">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-outline-success">Aceptar</button>
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
        <h5 class="modal-title" id="titledependencia"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodydependencia">
        
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
        <button type="button" class="btn btn-outline-success">Aceptar</button>
      </div>
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
        var titulo = $("#titledependencia");
        var body = $("#bodydependencia");
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
mostrar = function(ids,depename,direc,descrip,urls,imagens){
  $('#ids').val(ids);
  $('#depename').val(depename);
  $('#direc').val(direc);
  $('#descrip').val(descrip);
  $('#urls').val(urls); 
};
</script>
<script>
  $(document).ready(function(){
    $(".dependencia").click(function(){
        var form = "";
        var titulo = $("#modalTitle2");
        var body = $("#bodyModal2");
        form+='<form><div class="row"><div class="col">';
       form+='<input type="text" class="form-control" placeholder="Id"  id="ids" disabled></div><div class="col"><input type="text" class="form-control" placeholder="Dependencia"  id="depename"></div></div>';
       form+='<div class="row mt-4"><div class="col"><input type="text" class="form-control" placeholder="Director"  id="direc"></div><div class="col"><input type="text" class="form-control" placeholder="Url"  id="urls"></div></div></form>';
       form+='<div class="row mt-4"><div class="col"><textarea rows="4" class="form-control" placeholder="Descrpicion" id="descrip"></textarea></div></div>';
       form+='<div class="row mt-4 justify-content-center"><input class="btn btn-info" name="uploadedfile" id="imagens" type="file" /></div>';
       body.html(form);
       titulo.html('Editar Dependencias');
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
                console.log('se Modifico');
        }
        });
    });
});
</script>
</body>
</html>