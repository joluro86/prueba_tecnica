@extends('layouts.plantilla')

@section('title', 'Index')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')

    <div class="container">
        <h1>Clientes</h1>
        <a href="{{ route('customers.create') }}">Crear Cliente</a>

        <table class="table" id="clientes">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha Nacimiento</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $c)
                    <tr>
                        <th scope="row">{{ $c->id_number }}</th>
                        <td><a href="{{ route('customers.show', $c->id) }}">{{ $c->name }}</a></td>
                        <th scope="row">{{ $c->birth_day }}</th>
                        <th scope="row">{{ $c->address }}</th>
                        <th scope="row">{{ $c->phone }}</th>
                        <th scope="row">{{ $c->city->name }}</th>
                        <td><a href="{{ route('customers.edit', $c->id) }}">Editar</a></td>
                        <td>
                            <form action="{{ route('customers.delete', $c) }}" method="post">
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
            $('#clientes').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                }
            });
        });
    </script>

@endsection()
