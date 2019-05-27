@extends('layouts.layout')
@section('content')
<div class="container">
    <img src="{{$valor->imagendep}}" alt="primera imagen" 
                    height="300px" width="100%">
    <h2>{{$valor->nombredep}}</h2>
    <h3>Director: {{$valor->director}} </h3>
    <p>
    {{$valor->descripciondep}}
    </p>
    <a href="http://{{$valor->url}}"><button>ir</button></a>
    <br>
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
                <div class="carousel-caption">
                    <h3>Komi-san Besto waifu</h3>
                    <p>Komi-san god</p>
                </div>
            </div>
            <div class="carousel-item">
                    <img src="../../imagen/lotte1.jpg" alt="segunda imagen" 
                    height="500px" width="100%">
                    <div class="carousel-caption">
                            <h3>lotte Besto waifu</h3>
                            <p>lotte god</p>
                        </div>   
            </div>
            <div class="carousel-item">
                    <img src="../../imagen/lotte2.jpg" alt="tercera imagen" 
                    height="500px" width="100%">
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
</div>
</div>
</div>
@endsection