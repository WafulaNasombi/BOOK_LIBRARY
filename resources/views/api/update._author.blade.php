@extends('layout')

@section('content')
  <h1>Edit Author</h1>

  <form method="POST" action="/authors/{{ $author->id }}">
    @csrf
    @method('PUT')
    <div>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" value="{{ $author->name }}" required>
    </div>

    <div>
      <label for="id">id:</label>
      <input type="id"  name="id" value="{{ $author->id }}" required>
    </div>

    <button type="submit">Update</button>
  </form>
@endsection
