@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

<div class="container" style="width:400px;margin:30px auto;">

<h1 class="title">Crear nueva ciudad</h1>

<form action="{{ route('cities.store') }}" method="POST">
@csrf
  <div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

</div>

@endsection()