@extends('layouts.plantilla')

@section('title', 'Index')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')

<div class="container">
<h1>Pedidos</h1>
<a href="{{ route('orders.create') }}">Nuevo pedido</a>

<table class="table" id="orders">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cliente</th>
      <th scope="col">Fecha</th>
      <th scope="col">Total</th>
      <th scope="col">Domicilio</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($orders as $p)
        <tr>
            <th scope="row">{{ $p->id }}</th>
            <td><a href="{{ route('orders.show', $p->id)}}">{{ $p->cliente }}</a></td>
            <th scope="row">{{ $p->date }}</th>
            <th scope="row">{{ $p->total }}</th>
            <th scope="row">{{ $p->delivery }}</th>
            <th scope="row">{{ $p->status }}</th>
            <td><a href="{{ route('orders.edit', $p->id)}}">Editar</a></td>
            <td><form action="{{ route('orders.delete', $p)}}" method="post">
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
            $('#orders').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                }
            });
        });
    </script>

@endsection()