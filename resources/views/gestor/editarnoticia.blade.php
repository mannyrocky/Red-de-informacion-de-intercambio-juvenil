@extends('layouts.layoutgestor')
@section('content')
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class = "card">
                <h3 style="text-align:center;">Editar Noticias</h3>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="Imagen" class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control btn btn-secondary">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="Titulo" class="col-md-4 col-form-label text-md-right">{{__('Titulo')}}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="Autor" class="col-md-4 col-form-label text-md-right">{{__('Autor')}}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="Fecha" class="col-md-4 col-form-label text-md-right">{{__('Fecha')}}</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="Descripcion" class="col-md-4 col-form-label text-md-right">{{__('Descripcion')}}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Guardar') }}
                                </button>
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Borrar') }}
                                </button>
                                <a href="{{route('Gestor')}}" class="btn btn-danger">Cancelar</a>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection