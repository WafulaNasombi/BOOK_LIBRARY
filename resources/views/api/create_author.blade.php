@extends('layout')

@section('title', 'Create Author')

@section('content')
    <h1>Create Author</h1>
    <form action="/authors" method="POST">
        @csrf
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname"><br>

        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname"><br>

        <label for="id">ID:</label>
        <input type="text" id="id" name="id"><br>

        <button type="submit">Create</button>
    </form>
@endsection
