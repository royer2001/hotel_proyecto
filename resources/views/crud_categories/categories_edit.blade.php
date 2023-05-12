@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Category</h1>
        <hr>
        <form action="{{ route('categories.update', $category->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                       value="{{ old('name', $category->name) }}" required maxlength="255">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="3"
                          class="form-control @error('description') is-invalid @enderror">{{ old('description', $category->description) }}</textarea>
                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

@endsection