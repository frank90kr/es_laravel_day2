@extends('templates.base')

@section('title', 'Libreria - Index of Books')

@section('content')

<h1>Book list</h1>

@if ($books->count())
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Author</th>
            <th scope="col">Img</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <th scope="row">{{ $book->id }}</th>
            <td><a href="{{ route('books.show', ['id' => $book]) }}">{{ $book->title }}</a></td>
            <td>{{ $book->price }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->img }}</td>
            <td>{{ $book->created_at }}</td>
            <td>{{ $book->updated_at }}</td>
            <td>
                <form action="{{ route('books.destroy', ['id' => $book]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Elimina</button>
                </form>
            </td>
        </tr>
            
        @endforeach
    </tbody>
  </table>
  {{ $books->links() }}
  @else
    <h2>Nessun libro presente</h2>
    @endif
@endsection
