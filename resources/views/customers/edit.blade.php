@extends('layouts.plantilla')

@section('title', 'Cliente')

@section('content')

<div class="container">

<h1 class="title">Editar cliente</h1>

<form action="{{ route('customers.update', $customer) }}" method="POST">
@csrf
@method('put')
<div class="mb-1">
  <label for="id_number" class="form-label">Id</label>
  <input type="number" class="form-control" id="id_number" name="id_number" value="{{$customer->id_number}}">
</div>
<div class="mb-1">
  <label for="name" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="name" name="name" value="{{$customer->name}}">
</div>
<div class="mb-1">
  <label for="birth_day" class="form-label">Fecha nacimiento</label>
  <input type="date" class="form-control" id="birth_day" name="birth_day" value="{{$customer->birth_day}}">
</div>
<div class="mb-1">
  <label for="address" class="form-label">Dirección</label>
  <input type="text" class="form-control" id="address" name="address" value="{{$customer->address}}">
</div>
<div class="mb-1">
  <label for="phone" class="form-label">Telefono</label>
  <input type="number" class="form-control" id="phone" name="phone" value="{{$customer->phone}}">
</div>
<div class="mb-3">
  <label for="ciudad" class="form-label">Ciudad</label>
  <select name="city" id="city" class="form-control selectpicker" data-style="btn btn-link" data-title="Elegir ISP" required>
    <option value="{{ $customer->city->id }}">{{$customer->city->name}}</option>
    @foreach($cities as $c)
      @if ($c->name != $customer->city->name )
        <option value="{{ $c->id }}">{{ $c->name }}</option>
      @endif
    @endforeach
  </select>
</div>

<button type="submit" class="btn btn-primary">Actualizar</button>

</div>

@endsection()