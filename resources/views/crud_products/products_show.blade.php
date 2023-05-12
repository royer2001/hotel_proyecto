@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Products Details</h1>
        <hr>
        <div class="row">
            <div class="col-sm-6">
                
                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Categoría</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->category->name }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection