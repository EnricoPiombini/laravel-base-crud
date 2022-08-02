@extends('layouts.app')


@section('page_content')
    <div class="container">
        <h1>Comics Archive</h1>
        <a href="{{ route('comics.create') }}" class="btn btn-secondary">Show</a>
        @foreach ($comics as $comic)
            <h3>{{ $comic->title }}</h3>
            <a href="{{ route('comics.show', $comic->id) }}">Show</a>
        @endforeach
    </div>
@endsection
