@extends('layouts.app')

@section('content')
    <h1>Categorías</h1>
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
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <a href="{{ route('categories.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Añadir Categoría</a>

            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm">
                            <i class="bi bi-eye"></i> Show</a>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pen"></i> Edit</a>

                        <form action="{{ route('categories.destroy', $category->id) }}" method="post"
                            class="d-inline-block">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm"
                                  onclick="return confirm('Are you sure you want to delete this category?')">
                                  <i class="bi bi-trash"></i> Delete
                          </button>
                      </form></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection