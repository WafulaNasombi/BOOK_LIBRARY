@extends('layout')

@section('content')
    <h1>{{ $book->title }}</h1>
    <p>By {{ $book->author->first_name }} {{ $book->author->last_name }}</p>
    <p>ISBN: {{ $book->isbn }}</p>
    <p>Author: {{ $book->author }}</p>
    <p>Published Date: {{ $book->published_date }}</p>
@endsection
