@extends('layout')

@section('content')
  <h1>Books</h1>
  <ul>
    @foreach($books as $book)
      <li>{{ $book->title }} by {{ $book->author->fname }} {{ $book->author->lname }}</li>
    @endforeach
  </ul>
@endsection
