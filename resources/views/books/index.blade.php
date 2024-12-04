   @extends('books.layout')

   @section('title')
   Home
   @endsection

   @section('page-content')

   <div class=" row mt-5">

    <div class="col-lg-10">
        <form method="GET" action="{{route('books.index')}}">
            <div class="row g-3">
              <div class="col">
                <input type="text" name="search" value="{{request()->search}}" class="form-control" placeholder="search here">
              </div>
              <div class="col">
               <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
        </form>
    </div>
    <div class="col-lg-2 text-end">
        <a href=" {{route('books.create')}}" class="btn btn-primary">Create new</a>
    </div>
   </div>
   <h1 class="text-center text-dark m-4">Book List</h1>
    {{-- <h1>Book List</h1> --}}
    <table class="table table-bordered table-striped-columns table-hover table-group-divider">
        <tr class="table-success">
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Stock</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->isbn }}</td>
            <td>{{ $book->stock }}</td>
            <td>{{ $book->price }}</td>
            {{-- <td><a href="{{url('books/'. $book->id .'/show')}} ">View</a></td> --}}
            {{-- <td><a href="{{ url('/books/show/'. $book->id) }}">View</a></td> --}}
            <td>
                <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">View</a>

                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('books.destroy') }}" onsubmit="confirm('Are you sure?')" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{ $book->id }}">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>

        </tr>
        @endforeach
    </table>

    <div class="d-flex justify-content-center">
        {{ $books->links() }}
    </div>

    @endsection

