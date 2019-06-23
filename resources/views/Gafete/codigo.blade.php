<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Código Joven</title>
</head>
<body>
    <div class="container">
        <h2 class="form-control">Esto es una prueba</h2>
        <div style="border:1px solid black; width:100px; height:100px; text-align:center;" class="justify-content-center">
        
        </div><br>
        <div class="form-control">
            <label for="Nombre">Nombre: </label><br>
            <span>{{ $data['nombres'] }}</span>
            <label for="Apellidos">Apellidos: </label><br>
            <span>{{ $data['apellidos'] }}: </span><br>
            <label for="Telefono">Telefono</label>
            <span>{{ $data['telefono'] }}: </span>
            <label for="CURP">CURP: </label>
            <span>{{ $data['curp'] }}</span><br>
            <label for="email">E-MAIL: </label>
            <span>{{ $data['email'] }}</span><br>
            <label for="Escuela">Escuela: </label>
            <span>{{ $data['Escuela'] }}</span>
        </div><br>
        <div>

        </div>
    </div>
</body>
</html>