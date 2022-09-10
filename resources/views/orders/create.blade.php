@extends('layouts.plantilla')

@section('title', 'Clientes')

@section('css')

@endsection

@section('content')

<div class="container" style="width:400px;margin:30px auto;">

<h1 class="title">Ingrese los productos</h1>

<form action="{{ route('orders.store') }}" method="POST">
@csrf
  <div class="mb-1">
    <label for="id" class="form-label">Id producto</label>
    <input type="text" class="form-control" id="id" name="id">
  </div>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

</div>

@endsection()

@section('js')
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
@endsection()