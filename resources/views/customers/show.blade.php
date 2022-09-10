@extends('layouts.plantilla')

@section('title', 'Show')

@section('content')

<div class="container">

<h1 class="title-title">Datos del cliente</h1> <br>

Id {{ $customer->id_number }} <br>

Nombre {{ $customer->name}} <br>
Fecha de nacimiento {{ $customer->name}} <br>
Dirección {{ $customer->address}} <br>
Telefono {{ $customer->phone}} <br>
Ciudad {{ $customer->city->name}} <br>

</div>
    
@endsection()
