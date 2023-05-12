@extends('layouts.app')

@section('content')
    <h1>Crear Producto</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Descripción:</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Precio:</label>
            <input type="number" name="price" placeholder="1.0" step="0.01" min="0" max="10" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="category_id">Categoría:</label>
            <select name="category_id" class="form-control" required>
                <option value="">Seleccione una categoría</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection
