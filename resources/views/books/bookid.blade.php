@extends('layout')

@section('content')
    <h1>{{ $book->title }}</h1>
    <p>Author: {{ $book->author->FirstName }} {{ $book->author->lastName }}</p>
    <p>Publication Date: {{ $book->published_date }}</p>
    <p>ISBN: {{ $book->isbn }}</p>
   
@endsection
