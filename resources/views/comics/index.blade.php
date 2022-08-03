@extends('layouts.app')


@section('page_content')
    <div class="container">
        <h1>Comics Archive</h1>
        <a href="{{ route('comics.create') }}" class="btn btn-secondary">Add</a>
        @foreach ($comics as $comic)
            <h3>{{ $comic->title }}</h3>
            <a href="{{ route('comics.show', $comic->id) }}">Show</a>
            <a href="{{ route('comics.edit', $comic->id) }}">Change</a>


            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="form-delete">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>

            </form>
        @endforeach
    </div>
@endsection
