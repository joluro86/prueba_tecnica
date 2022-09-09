@extends('layouts.plantilla')

@section('title', 'Clientes')

@section('content')

<div class="container" style="width:400px;margin:30px auto;">

<h1 class="title">Crear nuevo cliente</h1>

<form action="{{ route('cities.store') }}" method="POST">
@csrf
  <div class="mb-1">
    <label for="id_number" class="form-label">Id</label>
    <input type="number" class="form-control" id="id_number" name="id_number">
  </div>
  <div class="mb-1">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-1">
    <label for="name" class="form-label">Fecha nacimiento</label>
    <input type="date" class="form-control" id="name" name="name">
  </div>
  <div class="mb-1">
    <label for="name" class="form-label">Dirección</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-1">
    <label for="name" class="form-label">Telefono</label>
    <input type="number" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

</div>

@endsection()