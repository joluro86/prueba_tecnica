@extends('layouts.plantilla')

@section('title', 'Show')

@section('content')

<div class="container">

<h1 class="title-title">Datos del producto</h1> <br>

Id {{ $product->id }} <br>

Descripción {{ $product->description}} <br>
Cantidad {{ $product->amount}} <br>
Valor {{ $product->value}} <br>
Estado {{ $product->status}} <br>

</div>
    
@endsection()
