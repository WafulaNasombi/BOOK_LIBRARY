@extends('layout')

@section('content')
    <h1>Authors</h1>
    <ul>
        @foreach ($authors as $author)
        <li><a href="/author/{{ $author->id }}">{{ $author->fname }} {{ $author->lname }}</a></li>
        @endforeach
    </ul>
@endsection
