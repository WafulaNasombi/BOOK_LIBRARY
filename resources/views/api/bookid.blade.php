@extends('layout')

@section('content')
    <h1>{{ $book->title }}</h1>
    <p>Author: {{ $book->author->fname }} {{ $book->author->lname }}</p>
    <p>Publication Date: {{ $book->published_date }}</p>
    <p>ISBN: {{ $book->isbn }}</p>
   
@endsection
