@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

<div class="container">

<h1 class="title">Editar ciudad</h1>

<form action="{{ route('cities.update', $city) }}" method="POST">
@csrf
@method('put')
  <div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $city->name }}">
  </div>
  <button type="submit" class="btn btn-primary">Actualizar</button>
</form>

</div>

@endsection()