@extends('layouts.plantilla')

@section('title', 'Index')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')

<div class="container">
<h1>Productos</h1>
<a href="{{ route('products.create') }}">Crear Producto</a>

<table class="table" id="products">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descripción</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Valor</th>
      <th scope="col">Estado</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $p)
        <tr>
            <th scope="row">{{ $p->id }}</th>
            <td><a href="{{ route('products.show', $p->id)}}">{{ $p->description }}</a></td>
            <th scope="row">{{ $p->amount }}</th>
            <th scope="row">{{ $p->value }}</th>
            <th scope="row">{{ $p->status }}</th>
            <td><a href="{{ route('products.edit', $p->id)}}">Editar</a></td>
            <td><form action="{{ route('products.delete', $p)}}" method="post">
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

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#products').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                }
            });
        });
    </script>

@endsection()