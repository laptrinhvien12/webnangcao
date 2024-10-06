@extends('layouts.app')

@section('content')
    <h1>Add New Book</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" class="form-control" value="{{ old('author') }}">
        </div>

        <div class="form-group">
            <label for="published_year">Published Year</label>
            <input type="number" name="published_year" class="form-control" value="{{ old('published_year') }}">
        </div>

        <button type="submit" class="btn btn-success">Add Book</button>
    </form>
@endsection
