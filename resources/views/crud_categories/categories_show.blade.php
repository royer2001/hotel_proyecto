@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Category Details</h1>
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" readonly>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" readonly>{{ $category->description }}</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <a href="{{ route('categories.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection