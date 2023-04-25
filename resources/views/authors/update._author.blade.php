@extends('layout')

@section('content')
  <h1>Edit Author</h1>

  <form method="POST" action="/authors/{{ $author->id }}">
    @csrf
    @method('PUT')
    
<div>
    <label for="FirstName">First Name:</label>
    <input type="text" name="FirstName" id="FirstName">
    </div>

    <div>
    <label for="LastName">Last Name:</label>
    <input type="text" name="LastName" id="LastName">
</div>

 <div>
      <label for="author_id">id:</label>
      <input type="id"  name="id" value="{{ $author->id }}" required>
    </div>

    <button type="submit">Update</button>
  </form>
@endsection
