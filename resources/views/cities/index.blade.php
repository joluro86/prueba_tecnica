@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')

<div class="container">
<h1>Ciudades</h1>
<a href="{{ route('cities.create') }}">Crear Ciudad</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($cities as $city)
        <tr>
            <th scope="row">{{ $city->id }}</th>
            <td><a href="{{ route('cities.show', $city->id)}}">{{ $city->name }}</a></td>
            <td><a href="{{ route('cities.edit', $city->id)}}">Editar</a></td>
            <td><form action="{{ route('cities.delete', $city)}}" method="post">
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