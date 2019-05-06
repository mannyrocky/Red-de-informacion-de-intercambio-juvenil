@extends('layouts.layoutgestor')

@section('content')
<div class="container">
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
    <div class="carousel-item">
        <img src="../../imagen/lotte2.jpg" alt="cuarta imagen" 
        height="500px" width="100%">
        <div class="carousel-caption">
            <h3>lotte Besto waifu</h3>
            <p>lotte god</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="../../imagen/lotte2.jpg" alt="quinta imagen" 
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
  <div class="container" style="text-align:center;">
    <input type="text"><button type="button">Cambiar</button><br><br>
    <input type="text"><button type="button">Cambiar</button><br><br>
    <input type="text"><button type="button">Cambiar</button><br><br>
    <input type="text"><button type="button">Cambiar</button><br><br>
    <input type="text"><button type="button">Cambiar</button><br><br>
    <button type="submit">Guardar</button><button>Salir</button><br><br>
  </div>
</div>
@endsection