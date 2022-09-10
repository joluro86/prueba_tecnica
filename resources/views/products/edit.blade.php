@extends('layouts.plantilla')

@section('title', 'Cliente')

@section('content')

    <div class="container">

        <h1 class="title">Editar cliente</h1>

        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-1">
                <label for="description" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ $product->description }}">
            </div>
            <div class="mb-1">
                <label for="amount" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="amount" name="amount" value="{{ $product->amount }}">
            </div>
            <div class="mb-1">
                <label for="value" class="form-label">Valor</label>
                <input type="number" class="form-control" id="value" name="value" value="{{ $product->value }}">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Estado</label>
                <select name="status" id="status" class="form-control" data-style="btn btn-link" data-title="Elegir ISP"
                    required>
                    <option>Activo</option>
                    <option>Inactivo</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection()
