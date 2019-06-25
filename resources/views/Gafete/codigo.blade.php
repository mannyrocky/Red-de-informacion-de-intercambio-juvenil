<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gefete de Código Joven</title>
</head>
<style>
.foto{
    height:170px;
    width:200px;
    border:1px solid black;
    margin-top:10px;
    margin-left:10px;
    float:left;
}
.container{
    height:250px;
    width:600px;
    margin-top:5px;
    background:white;
    margin-left:14px;
}
.texto-foto{
    margin-top:50px;
    -webkit-transform: rotate(-45deg);  
      -moz-transform: rotate(-45deg);  
      -ms-transform: rotate(-45deg);  
      -o-transform: rotate(-45deg);  
      transform: rotate(-45deg);  
}
.datos{
    width:450px;
    height:220px;
    margin-left:120px;
    margin-top:10px;
}
.nombre{
    margin-top:10px;
    margin-left:-100px;
}
.telefono{
    margin-left:-100px;
}
.curp{
    margin-left:-100px;
    margin-top:10px;
}
.correo{
    margin-left:-100px;
    margin-top:10px;
}
.escuela{
    margin-left:-100px;
    margin-top:10px;

}
.contenedor-principal{
    background:#EEEE;
    height:300px;
    width:630px;
    margin-left:50px;
}
.codigo-barras{
    margin-left:-30px;
}
</style>
<body>
<div class="contenedor-principal">
    <br>
    <div style="border: 1px solid gray;" class="container">
        <div class="foto">
            <div class="texto-foto">inserte su foto aqui</div>
        </div>
            <div class="datos">   
                <div>            
                    <label class="nombre" for="Nombre">Nombre Completo: </label> <span>{{ $data['nombres'] }} {{ $data['apellidos'] }}</span>             
                </div><br>
                <div>
                    <label class="curp" for="Curp">CURP: </label><span>{{ $data['curp'] }}</span>
                </div><br>
                <div>
                    <label class="correo" for="Email">Correo Electronico: </label><span>{{ $data['email'] }}</span>
                </div><br>
                <div>
                    <label class="telefono" for="Telefono">Telefono: </label><span>{{ $data['telefono'] }}</span>
                </div><br>
                <div>
                    <label class="escuela" for="Escuela">Escuela: </label><span>{{ $data['Escuela'] }}</span>
                </div><br>
                <div class="codigo-barras">
                {!! DNS1D::getBarcodeHTML($data['curp'], "C128");!!}
                </div>
            </div>
    </div>
</div>
</body>
</html>