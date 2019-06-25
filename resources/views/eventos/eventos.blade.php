@extends('layouts.layout')
 
@section('content')
<div class="container">
    <img src="../../uploads/{{$even->imagenjuv}}" alt="segunda imagen" 
    height="300px" width="100%">
    <h2>{{$even->tituloev}}</h2>
    <h2>{{$even->depev}}</h2><br>
    <h2>{{$even->lugar}}</h2>
    <p style="t">{{$even->Descripcionev}}
    </p>
</div>
@endsection