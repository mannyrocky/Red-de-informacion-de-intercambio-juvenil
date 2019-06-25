@extends('layouts.layout')
 
@section('content')
<div class="container">
    <img src="../../uploads/{{$noti->imagennoti}}" alt="segunda imagen" 
    height="300px" width="100%">
    <h2>{{$noti->titulonoti}}</h2>
    <h2>{{$noti->autornoti}}</h2><br>
    <h2>{{$noti->fechanoti}}</h2>
    <p style="t">{{$noti->Descripcionnot}}
    </p>
</div>
@endsection