@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Productos</h1>
        @if(session('success'))
        <h4 class="alert alert-success">
        <b>@if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </b>
        </h4>
        @endif
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('products.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Añadir Categoría</a>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id}}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category ? $product->category->name : '' }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">
                                <i class="bi bi-eye"></i> Show</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pen"></i> Edit</a>
                            <form action="">
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links('pagination::bootstrap-5') }}
    </div>
@endsection