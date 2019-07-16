<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Red de Intercambio de Informacion Juvenil</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.0/css/lightbox.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.bootcss.com/hover.css/2.3.1/css/hover.css">
    <!--Fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/nav.css')}}">    
</head>
<body>
<header>
    <nav class="navbar navbar-expand-sm " style="background: #EEEEEE">
        <div class="collapse navbar-collapse">
        <div class="container-fluid">
            <div class="row w-100">
                <div class="col-md-4">
                    <ul class="nav justify-content-center">
                            <li>
                            <span id="lafecha" class="fecha-actual"></span></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="nav justify-content-center">
                        <li><a href="http://www.bcs.gob.mx/formulario-de-contacto"><img src="http://www.bcs.gob.mx/wp-content/themes/bcsgob-wp/assets/images/icono-email.png" alt="Formulario de Contácto"> Contáctanos</a></li>
                        <li><a href="tel:6121239400"><img src="http://www.bcs.gob.mx/wp-content/themes/bcsgob-wp/assets/images/icono-llamada.png" alt="Llamanos al 612 1239400"> (612) 123 9400 </a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="nav justify-content-center">
                        <li><span class="siguenos">Siguenos</span></li>
                        <li><a href="https://www.facebook.com/GobEdoBCS/" target="_blank"><img src="http://www.bcs.gob.mx/wp-content/themes/bcsgob-wp/assets/images/icono-facebook.png"><span class="sr-only">Facebook</span></a></li>
                        <li><a href="https://twitter.com/GobBCS" target="_blank"><img src="http://www.bcs.gob.mx/wp-content/themes/bcsgob-wp/assets/images/icono-twitter.png"><span class="sr-only">Twitter</span></a></li>
                        <li><a href="https://instagram.com/gobiernobcs/" target="_blank"><img src="http://www.bcs.gob.mx/wp-content/themes/bcsgob-wp/assets/images/icono-instagram.png"><span class="sr-only">Instagram</span></a></li>
                        <li><a href="https://www.youtube.com/channel/UC0KrSRyYv3migvbasXzNJpQ" target="_blank"> <img src="http://www.bcs.gob.mx/wp-content/themes/bcsgob-wp/assets/images/icono-youtube.png"><span class="sr-only">YouTube</span></a></li>
                    </ul> 
                </div>
            </div>
        </div>
        </div>
    </nav>
    <div class="container">
        <nav class="navbar">
            <div class="row w-100">
                <div class="col-md-6">
                    <a class="menu-logo" href="/">
                        <img src="http://www.bcs.gob.mx/wp-content/themes/bcsgob-wp/assets/images/logo-gobbcs.png" alt="Gobierno de Baja California Sur 2015-2021 | Mejor Futuro"> 
                    </a>
                </div>
            </div>
        </nav>
        <nav id="barranavegacion" class="navbar navbar-expand-lg navbar-light bg-white shadow-sm p-3 mb-5 bg-white rounded">
            <a class="navbar-brand d-md-none" href="#">Menú</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"id="navbarDependenciasLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dependencias
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDependenciasLink">
                            @if (App\Dependencias::count() > 0)
                                @foreach($dependencia as $variable)
                                    <a class="dropdown-item"  href="{{url('/dependencias/Dependencia/'.$variable->id)}}" data-toggle="tooltip" title="Mirar datos de {{$variable->nombredep}}">{{$variable->nombredep}}</a>
                                @endforeach
                            @endif
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarCodigoLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Código Joven
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarCodigoLink">
                            <a class="dropdown-item" href="{{route('enterate')}}">Entérate</a>
                            <a class="dropdown-item" href="{{route('registrar')}}">Regístrate</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarJuventudLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Juventud
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarJuventudLink">
                            @if (App\Juventud::count() > 0)
                                @foreach($juventud as $vari)
                                    <a class="dropdown-item"  href="{{url('/juventud/Juventud/'.$vari->id)}}" data-toggle="tooltip" title="Mirar datos de {{$vari->titulo}}">{{$vari->titulo}}</a>
                                @endforeach
                            @endif
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarProgramasLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Programas sociales
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarProgramasLink">
                            @if (App\Programas::count() > 0)
                                @foreach($programas as $vars)
                                    <a class="dropdown-item"  href="{{url('/programas/Programas/'.$vars->id)}}" data-toggle="tooltip" title="Mirar datos de {{$vars->nomprog}}">{{$vars->nomprog}}</a>
                                @endforeach
                            @endif
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarEventosLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Eventos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarEventosLink">
                            @if (App\Eventos::count() > 0)
                                @foreach($eventos as $evento)
                                    <a class="dropdown-item"  href="{{url('/eventos/eventos/'.$evento->id)}}" data-toggle="tooltip" title="Mirar datos de {{$evento->tituloev}}">{{$evento->tituloev}}</a>
                                @endforeach
                            @endif
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarNoticiasLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Noticias
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarNoticiasLink">
                            @if (App\Noticias::count() > 0)
                                @foreach($noticias as $notici)
                                    <a class="dropdown-item"  href="{{url('/noticias/noticias/'.$notici->id)}}" data-toggle="tooltip" title="Mirar datos de {{$notici->titulonoti}}">{{$notici->titulonoti}}</a>
                                @endforeach
                            @endif
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
 
 @yield('content')
 <!-- Footer -->
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
<script>
$(document).ready(function(){
    var navegacion = $("#barranavegacion");
    setInterval(function(){
            location.reload();
    },60000);
});
</script>
<script>
$(document).on("click", '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});
</script>
</body>
</html>