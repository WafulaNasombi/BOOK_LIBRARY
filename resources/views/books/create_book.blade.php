@extends('layout')

@section('content')
    <h1>Create New Book</h1>
    <form method="POST" action="/book">
    @csrf

    <div>
      <label for="title">Title:</label>
      <input type="text" name="title" id="title" required>
    </div>

    <div>
      <label for="author_id">Id:</label>
      <select name="author_id" id="author_id" required>
        @foreach ($authors as $author)
          <option value="{{ $author->id }}">{{ $author->first_name }} {{ $author->last_name }}</option>
        @endforeach
      </select>
    </div>

    <div>
      <label for="isbn">ISBN:</label>
      <input type="text" name="isbn" id="isbn" required>
    </div>

    <div>
      <label for="publication_date">Publication Date:</label>
      <input type="date" name="publication_date" id="publication_date" required>
    </div>

    <button type="submit">Create Book</button>
  </form>
@endsection
