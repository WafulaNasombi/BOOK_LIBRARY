@extends('layout')

@section('title', 'Author Details')

@section('content')
    <h1>Author Details</h1>
    <p>Author ID: {{ $author->id }}</p>
    <p>First Name: {{ $author->fname }}</p>
    <p>Last Name: {{ $author->lname }}</p>
    <p>id: {{ $author->id }}</p>
    

    <h2>Books</h2>
    <ul>
        @foreach ($author->books as $book)
            <li><a href="/book/{{ $book->id }}">{{ $book->title }}</a></li>
        @endforeach
    </ul>
@endsection
