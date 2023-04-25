@extends('layout')

@section('title', 'Author Details')

@section('content')
    <h1>Author Details</h1>
    <p>Author ID: {{ $author->author_id }}</p>
    <p>First Name: {{ $author->FirstName }}</p>
    <p>Last Name: {{ $author->LastName }}</p>
    
    

@endsection
