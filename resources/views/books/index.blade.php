@extends('layout')

@section('content')
  <h1>Books</h1>
  <ul>
    @foreach($books as $book)
      @php 
        $author = App\Models\Author::find($book->AuthorsId);
      @endphp
      <li>{{ $book->Title }} by {{ $author->FirstName }} {{ $author->LastName }} {{ $book->isbn }}</li>
    @endforeach
  </ul>
@endsection

