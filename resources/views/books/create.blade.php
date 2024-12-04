@extends('books.layout')

@section('title')
    New Book
@endsection

@section('page-content')
    <legend class="text-center text-dark mt-4">Insert Book</legend>

    <form action="{{ route('books.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label"> Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Book title" value="{{ old('title') }}" required>
            @error('title')
                <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" placeholder="Author" value="{{ old('author') }}" required>
            @error('author')
                <div class="alert alert-danger text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN" value="{{ old('isbn') }}" required>
            @error('isbn')
                <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" placeholder="Stock" value="{{ old('stock') }} " required>
            @error('stock')
                <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Price" value="{{ old('price') }}" required>
            @error('price')
            <div class="alert alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 ">
            <div class="text-start">
                <a href="{{ route('books.index') }}" class="btn btn-danger">Back</a>
            </div>
           <div class="text-end">
            <button type="submit" class="btn btn-primary text-end">Submit</button>
           </div>

        </div>

    </form>
@endsection
