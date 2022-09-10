@extends('layouts.plantilla')


@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@endsection

@section('title', 'Index')

@section('content')

    <div class="container">
        <h1>Ciudades</h1>
        <a href="{{ route('cities.create') }}">Crear Ciudad</a>

        <table class="table" id="ciudades">
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
                        <td><a href="{{ route('cities.show', $city->id) }}">{{ $city->name }}</a></td>
                        <td><a href="{{ route('cities.edit', $city->id) }}">Editar</a></td>
                        <td>
                            <form action="{{ route('cities.delete', $city) }}" method="post">
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
            $('#ciudades').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                }
            });
        });
    </script>

@endsection()
