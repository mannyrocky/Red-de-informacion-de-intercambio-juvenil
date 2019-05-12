@extends('layouts.layout')
 
@section('content')
<div class="row justify-content-center animated zoomIn" style="margin-top:10%">
        <div class="card w-50">
            <div class="header">
                <h4 class="title">Login</h4>
            </div>
            <div class="content">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" placeholder="Username" name="usuario">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" placeholder="Password" name="contra">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" rel="pulse-shrink" class="btn btn-info btn-fill w-75 hvr-pulse">Ingresar</button>
                    </div>
                </form>
                <div class="row mt-3">
                    <div class="col-md-6 col-sm-12 mt-2">
                        <div class="row justify-content-center">
                            <button class="btn btn-link hvr-pulse">Olvide mi contraseña</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-2">
                        <div class="row justify-content-center">
                            <input type="button" class="btn btn-link hvr-pulse" data-target="#exampleModalCenter"
                                data-toggle="modal" value="Registrar">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection