@extends('layouts.layoutgestor')
 
@section('content')
<div class="container">
@if (App\Escuela::count() > 0)
{!! csrf_field() !!}

<div class="row">
    <div class="col-sm-12">
        <table id="tabls" class="table table-condensed table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="align-middle col-xs-1 text-center">ID</th>
                    <th class="align-middle col-xs-3">Escuela</th>
                    <th class="align-middle col-xs-3">Escolaridad</th>
                    <th class="align-middle col-xs-3 text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($escuela as $school)
                <tr>
                    <td class="text-center align-middle">{{$school->id}}</td>
                    <td class="align-middle">{{$school->nombre_escuela}}</td>
                    <td class="align-middle">{{$school->escolaridad}}</td>
                    <td class="text-center">
                        <a id="borrar" data-id="{{$school->id}}" href="#" data-toggle="modal" data-target="#msjeli"><button type="button" class="btn btn-danger btn-sm eliminar">Elminar</button></a>
                        <a id="editescuela" data-id="{{$school->id}}"><button type="button" class="btn btn-primary btn-sm">Editar</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@else
<div style="text-align:center; color:red;"><h4>No hay Usuarios registrados</h4></div>
@endif
@endsection