@extends('layout')

@section('title', 'Create Author')

@section('content')
    <h1>Create Author</h1>
    <form method="POST" action="/author">
    @csrf
    <label for="FirstName">First Name:</label>
    <input type="text" name="FirstName" id="FirstName">
    <br>
    <label for="LastName">Last Name:</label>
    <input type="text" name="LastName" id="LastName">
    <br>
    <label for="author_id">Id:</label>
    <input type="id" name="id" value="{{$author->id}}">
    <br>
    <button type="submit">Create Author</button>
</form>

@endsection
