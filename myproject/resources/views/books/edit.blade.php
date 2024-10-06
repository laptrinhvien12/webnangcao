@extends('layouts.app')

@section('content')
    <h1>Edit Book</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $book->title) }}">
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" class="form-control" value="{{ old('author', $book->author) }}">
        </div>

        <div class="form-group">
            <label for="published_year">Published Year</label>
            <input type="number" name="published_year" class="form-control" value="{{ old('published_year', $book->published_year) }}">
        </div>

        <button type="submit" class="btn btn-success">Update Book</button>
    </form>
@endsection
