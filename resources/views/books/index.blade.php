@extends('layout')

@section('content')
  <h1>Books</h1>
  <ul>
    @foreach($books as $book)
    @php 
        $author = App\Models\Author::find($book->author_id);
      @endphp
      <li>{{ $book->Title }}  {{ $book->isbn }}{{ $book->id }}</li>
    @endforeach
  </ul>
@endsection


