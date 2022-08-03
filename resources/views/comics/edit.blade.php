@extends('layouts.app')

@section('page_title', 'Modifica Info')

@section('page_content')
    <form action="{{ route('comics.update') }}" method="post">
        @csrf

        @method('PATCH')


        <div class="mb-3">
            <label for="titleInput" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="titleInput" value="{{ $comic->$title }}">
        </div>

        <div class="mb-3">
            <label for="titleInput" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="titleInput"
                value="{{ $comic->$description }}">
        </div>

        <div class="mb-3">
            <label for="titleInput" class="form-label">Img</label>
            <input type="text" class="form-control" name="thumb" id="titleInput" value="{{ $comic->$img }}">
        </div>
        <div class="mb-3">
            <label for="titleInput" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="titleInput" value="{{ $comic->$price }}">
        </div>

        <div class="mb-3">
            <label for="titleInput" class="form-label">Series</label>
            <input type="text" class="form-control" name="series" id="titleInput" value="{{ $comic->$series }}">
        </div>

        <div class="mb-3">
            <label for="titleInput" class="form-label">Sale_date</label>
            <input type="text" class="form-control" name="sale_date" id="titleInput" value="{{ $comic->$saleDate }}">
        </div>

        <div class="mb-3">
            <label for="titleInput" class="form-label">Type</label>
            <input type="text" class="form-control" name="type" id="titleInput" value="{{ $comic->$type }}">
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="submit" class="btn btn-danger"><a href="{{ route('comics.index') }}"></a>
                Home</button>
        </div>



    </form>
@endsection
