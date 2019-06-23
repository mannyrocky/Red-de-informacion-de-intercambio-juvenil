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
        </nav>
        <nav class="navbar navbar-collapse">
            <div class="container">
                <ul class="nav justify-content-center ">
                    <li class="nav-item ">
                    <a class="nav-link" href="{{route('home')}}">Inicio</a>
                    </li>
                <!-- Dropdown -->
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Dependencias
                    </a>
                    <div class="dropdown-menu">
                    @if (App\Dependencias::count() > 0)
                        @foreach($dependencia as $variable)
                            <a class="dropdown-item"  href="{{url('/dependencias/Dependencia/'.$variable->id)}}" data-toggle="tooltip" title="Mirar datos de {{$variable->nombredep}}">{{$variable->nombredep}}</a>
                        @endforeach
                    @endif
                    </div>
                <!-- Dropdown -->
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Código Joven
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Información Código Joven</a>
                    <a class="dropdown-item" href="{{route('registrar')}}">Registrate</a>
                    <a class="dropdown-item" href="#">Enterate</a>
                    </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Juventud
                    </a>
                    <div class="dropdown-menu">
                    @if (App\Juventud::count() > 0)
                        @foreach($juventud as $vari)
                            <a class="dropdown-item"  href="{{url('/juventud/Juventud/'.$vari->id)}}" data-toggle="tooltip" title="Mirar datos de {{$vari->titulo}}">{{$vari->titulo}}</a>
                        @endforeach
                    @endif
                    </div>
                    </li>
                    
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Programas Sociales
                    </a>
                    <div class="dropdown-menu">
                    @if (App\Programas::count() > 0)
                        @foreach($programas as $vars)
                            <a class="dropdown-item"  href="{{url('/programas/Programas/'.$vars->id)}}" data-toggle="tooltip" title="Mirar datos de {{$vars->nomprog}}">{{$vars->nomprog}}</a>
                        @endforeach
                    @endif
                    </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Eventos
                    </a>
                    <div class="dropdown-menu">
                    @if (App\Eventos::count() > 0)
                        @foreach($eventos as $evento)
                            <a class="dropdown-item"  href="#" data-toggle="tooltip" title="Mirar datos de {{$evento->tituloev}}">{{$evento->tituloev}}</a>
                        @endforeach
                    @endif
                    </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Noticias
                    </a>
                    <div class="dropdown-menu">
                    @if (App\Noticias::count() > 0)
                        @foreach($noticias as $notici)
                            <a class="dropdown-item"  href="#" data-toggle="tooltip" title="Mirar datos de {{$notici->titulonoti}}">{{$notici->titulonoti}}</a>
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

 <footer style="background:gray;">
    <div class="pie-de-pagina">
    <div class="container">
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
            <div class="col-md-3">
            <div class="medios-de-comunicacion">
                Conmutador (612) 125 3767 <br>
                <a href="http://www.facebook.com/isjbcs">Contactanos vía web</a>
            </div>
            </div>
        </div>
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
</body>
</html>