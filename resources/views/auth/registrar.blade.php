@extends('layouts.layout')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{route('Registrar')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="Nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="nombres" type="text" class="form-control" name="nombres" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Apellidos" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

                            <div class="col-md-6">
                                <input id="apellidos" type="select" class="form-control" name="apellidos" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>
                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control" name="telefono" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Curp" class="col-md-4 col-form-label text-md-right">{{ __('Curp') }}</label>
                            <div class="col-md-6">
                                <input id="curp" type="text" class="form-control" name="curp" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Nivel Educativo" class="col-md-4 col-form-label text-md-right">{{ __('Escolaridad') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="Escolaridad" id="Escolaridad" required>
                                    <option value="Sin escolaridad">Sin escolaridad</option>
                                    <option value="Kinder">Kinder</option>
                                    <option value="Primaria">Primaria</option>
                                    <option value="Secundaria">Secundaria</option>
                                    <option value="Preparatoria">Preparatoria</option>
                                    <option value="Universidad">Universidad</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Escuela" class="col-md-4 col-form-label text-md-right">{{ __('Escuela') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="Escuela" id="Escuela"required>
                                @if (App\Escuela::count() > 0)
                                    @foreach($escuela as $escuelas)
                                        <option>{{$escuelas->nombre_escuela}}</option>
                                    @endforeach
                                @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Intereses" class="col-md-4 col-form-label text-md-right">{{ __('Intereses') }}</label>
                            <div class="col-md-6">
                                <select id="intereses" class="form-control" name="intereses" required>
                                    <option value="Musica">Musica</option>
                                    <option value="Deportes">Deportes</option>
                                    <option value="Entretenimiento">Entretenimiento</option>
                                    <option value="Programas Sociales">Programas Sociales</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id="registro" type="submit" class="btn btn-success">
                                    {{ __('Registrar') }}
                                </button>
                                <a href="{{route('home')}}" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<script type = "text/javascript">
$(document).ready(function(){
    $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });
$("#Escolaridad").change(function(){
    var escolaridad = $("#Escolaridad").val();
    $.ajax({
                type:'GET',
                url:'/auth/registrar/ajaxRegistrar/'+escolaridad,
                success:function(data) {
                $("#Escuela").html(data);
               },
    });
});
});
</script>
@endsection