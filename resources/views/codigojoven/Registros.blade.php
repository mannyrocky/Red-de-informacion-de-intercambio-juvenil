@extends('layouts.layoutgestor')
 
@section('content')
@if (App\Usuarios::count() > 0)
{!! csrf_field() !!}
    {!! Form::open(['route' => 'Registros','method' => 'GET', 'class' => 'navbar-form
        pull-right']) !!}
    <div class="input-group">
        {!! Form::text('nombres',null,['class' => 'form-control','placeholder' => 'Buscar nombre',
            'aria-describedby' => 'search']) !!}
            <button class="btn btn-secondary" id="search">
                Buscar
            </button>
    </div>
    <br>
    <div class="row">
    <div class="col-sm-12">
        <table class="table table-condensed table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="align-middle col-xs-1 text-center">ID</th>
                    <th class="align-middle col-xs-3">Nombre</th>
                    <th class="align-middle col-xs-3">Apellidos</th>
                    <th class="align-middle col-xs-3">Telefono</th>
                    <th class="align-middle col-xs-3">Curp</th>
                    <th class="align-middle col-xs-3">Email</th>
                    <th class="align-middle col-xs-1">Escolaridad</th>
                    <th class="align-middle col-xs-2 text-center">Escuela</th>
                    <th class="align-middle col-xs-2 text-center">Opciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($user as $usercod)
                <tr>
                    <td class="text-center align-middle">{{$usercod->id}}</td>
                    <td class="align-middle">{{$usercod->nombres}}</td>
                    <td class="align-middle">{{$usercod->apellidos}}</td>
                    <td class="align-middle">{{$usercod->telefono}}</td>
                    <td class="align-middle">{{$usercod->curp}}</td>
                    <td class="align-middle">{{$usercod->email}}</td>
                    <td class="align-middle">{{$usercod->Escolaridad}}</td>
                    <td class="align-middle">{{$usercod->Escuela}}</td>
                    <td class="text-center">
                        <a href="#"><button class="btn btn-info">Editar</button></a>
                        <a href="#"><button class="btn btn-danger">Elminar</button></a>
                        <a href="#"><button class="btn btn-primary">PDF</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $user->render() !!}
    </div>
</div>
@else
<div style="text-align:center;"><h4>No hay Usuarios registrados</h4></div>
@endif
@endsection