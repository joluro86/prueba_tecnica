@extends('layouts.plantilla')

@section('title', 'Clientes')

@section('content')

<div class="container" style="width:400px;margin:30px auto;">

<h1 class="title">Crear nuevo cliente</h1>

<form action="{{ route('customers.store') }}" method="POST">
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
    <label for="birth_day" class="form-label">Fecha nacimiento</label>
    <input type="date" class="form-control" id="birth_day" name="birth_day">
  </div>
  <div class="mb-1">
    <label for="address" class="form-label">Dirección</label>
    <input type="text" class="form-control" id="address" name="address">
  </div>
  <div class="mb-1">
    <label for="phone" class="form-label">Telefono</label>
    <input type="number" class="form-control" id="phone" name="phone">
  </div>
  <div class="mb-3">
    <label for="ciudad" class="form-label">Ciudad</label>

    <select name="city" id="city" class="form-control selectpicker" data-style="btn btn-link" data-title="Elegir ISP" required>
      <option>---</option>
      @foreach($cities as $c)
        <option value="{{ $c->id }}">{{ $c->name }}</option>
      @endforeach
    </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

</div>

@endsection()