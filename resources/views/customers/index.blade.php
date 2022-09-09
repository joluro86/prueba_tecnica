@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')

<div class="container">
<h1>Clientes</h1>
<a href="{{ route('customers.create') }}">Crear Cliente</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha Nacimiento</th>
      <th scope="col">Dirección</th>
      <th scope="col">Telefono</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($customers as $c)
        <tr>
            <th scope="row">{{ $c->id_number }}</th>
            <td><a href="{{ route('customers.show', $c->id)}}">{{ $c->name }}</a></td>
            <th scope="row">{{ $c->bith_date }}</th>
            <th scope="row">{{ $c->address }}</th>
            <th scope="row">{{ $c->phone }}</th>
            <td><a href="{{ route('customers.edit', $c->id)}}">Editar</a></td>
            <td><form action="{{ route('customers.delete', $c)}}" method="post">
                @csrf
                @method('delete')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>  
@endsection()