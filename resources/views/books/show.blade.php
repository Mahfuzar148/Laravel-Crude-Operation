@extends('books.layout')

@section('title')
   view book
@endsection

@section('page-content')

    <div class="mt-3"></div>
    <h1>Book Details</h1>
    <table class="table table-bordered table-striped-columns table-hover table-group-divider">
        <tr>
            <th>ID</th>
            <th>{{ $book->id }}</th>
        </tr>
        <tr>
            <th>Title</th>
            <th>{{ $book->title }}</th>
        </tr>
        <tr>
            <th>Author</th>
            <th>{{ $book->author }}</th>
        </tr>
        <tr>
            <th>ISBN</th>
            <th>{{ $book->isbn }}</th>
        </tr>
        <tr>
            <th>Stock</th>
            <th>{{ $book->stock }}</th>
        </tr>
        <tr>
            <th>Price</th>
            <th>{{ $book->price }}</th>
        </tr>
        <tr>
            <td>Created at</td>
            <td>{{ $book->created_at }}</td>
        </tr>
        <tr>
            <td>Updated at</td>
            <td>{{ $book->updated_at }}</td>
        </tr>
        <tr class="text-center col-lg-2">
          <td colspan="2"> <a href="{{route('books.edit',$book->id)}}" class="btn btn-danger">EDIT</a></td>
        </tr>
    </table>
    <div class="mt-3">
        <h1><a href="{{route('books.index')}}" class="btn btn-danger">Back</a></h1>
    </div>

@endsection


