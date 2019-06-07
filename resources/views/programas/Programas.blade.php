@extends('layouts.layout')
 
@section('content')
<div class="container">
    <img src="../../uploads/{{$pog->imagenprog}}" alt="segunda imagen" 
    height="300px" width="100%">
    <h2>{{$pog->nomprog}}</h2>
    <h2>{{$pog->nomdep}}</h2><br>
    <h2>{{$pog->responsable}}</h2>
    <p style="t">{{$pog->descriprog}}
    </p>
</div>
@endsection