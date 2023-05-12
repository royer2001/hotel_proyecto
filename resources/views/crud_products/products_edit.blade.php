@extends('layouts.app')

@section('content')
    <h1>Editar Producto</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descripción:</label>
            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Precio:</label>
            <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
        </div>
        <div class="form-group">
            <label for="category_id">Categoría:</label>
            <select name="category_id" class="form-control" required>
                <option value="">Seleccione una categoría</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
