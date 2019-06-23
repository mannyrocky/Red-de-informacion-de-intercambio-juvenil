@extends('layouts.layout')
 
@section('content')
@if (App\Usuarios::count() > 0)
{!! csrf_field() !!}
    <div class="input-group custom-search-form col-sm-4">
        <input type="text" class="form-control" placeholder="Filtrar">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button">
                <i class="fa fa-search"></i>
            </button>
        </span>
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
                        <a data-toggle="tooltip" title="Modificar datos de: {{$usercod->nombres}}" data-placement="left"><i
                            class="fa fa-2x fa-pencil"></i></a>
                        <a data-toggle="tooltip" title="Eliminar empleado: {{$usercod->nombres}}" data-placement="left"><i
                            class="fa fa-2x fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@else
<h1>No hay Empleados registradas</h1>
@endif
@endsection