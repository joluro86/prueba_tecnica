@extends('layouts.plantilla')

@section('title', 'Show')

@section('content')

<div class="container">

<h1 class="title-title">Datos de la ciudad</h1> <br>

Id {{ $city->id }} <br>

Nombre de la ciudad {{ $city->name}} 

</div>
    
@endsection()
