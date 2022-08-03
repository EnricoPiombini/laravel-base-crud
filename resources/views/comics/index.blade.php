@extends('layouts.app')
 
@section('page_title')
    


@section('page_content')
    <div class="container">

        <h1>Comics Archive</h1>

        @foreach ($comics as $comic)
            <div class="d-flex align-items-center">
                <h4 class="fw-bold">{{ $comic->title }}</h4>

                <button type="submit" class="btn btn-success m-2"">
                    <a href="{{ route('comics.show', $comic->id) }}" class="text-white text-decoration-none"> Show
                    </a></button>

                <button type="submit" class="btn btn-primary m-2">
                    <a href="{{ route('comics.edit', $comic->id) }}"
                        class="text-white text-decoration-none ">Edit</a></button>

                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="form-delete ">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger m-2">Delete</button>

                </form>
            </div>
        @endforeach

        <a href="{{ route('comics.create') }}" class="btn btn-secondary">Add A New Comic</a>
    </div>
@endsection
