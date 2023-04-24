@extends('layout')

@section('content')
    <h1>Authors</h1>
    <ul>
        @foreach ($authors as $author)
        <li><a href="/author/{{ $author->id }}">{{$author->AuthorsId}}{{ $author->FirstName }} {{ $author->LastName }}</a></li>
        @endforeach
    </ul>
@endsection
