@extends('layouts.plantilla')

@section('title', 'Clientes')

@section('content')

<div class="container" style="width:400px;margin:30px auto;">

<h1 class="title">Crear nuevo producto</h1>

<form action="{{ route('products.store') }}" method="POST">
@csrf
  <div class="mb-1">
    <label for="description" class="form-label">Descripción</label>
    <input type="text" class="form-control" id="description" name="description">
  </div>
  <div class="mb-1">
    <label for="amount" class="form-label">Cantidad</label>
    <input type="number" class="form-control" id="amount" name="amount">
  </div>
  <div class="mb-1">
    <label for="value" class="form-label">Valor</label>
    <input type="number" class="form-control" id="value" name="value">
  </div>
  <div class="mb-3">
    <label for="status" class="form-label">Estado</label>
    <select name="status" id="status" class="form-control selectpicker" data-style="btn btn-link" data-title="Elegir ISP" required>
      <option>Activo</option>
      <option>Inactivo</option>
    </select>  
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

</div>

@endsection()