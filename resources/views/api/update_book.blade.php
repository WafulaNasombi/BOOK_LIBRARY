@extends('layout')

@section('content')
    <h1>Edit Book</h1>
    <form action="/api/book/{{ $book->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}">
        </div>
        <div class="form-group">
            <label for="author_id">Author:</label>
            <select class="form-control" id="author_id" name="author_id">
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ $author->id == $book->author_id ? 'selected' : '' }}>{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="publication_date">Publication Date:</label>
            <input type="date" class="form-control" id="publication_date" name="publication_date" value="{{ $book->publication_date }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
