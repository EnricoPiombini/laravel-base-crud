@extends('layouts.app')

@section('page_title', 'Comics Info')

@section('page_content')
    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="titleInput" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="titleInput">
        </div>
        <div class="mb-3">
            <label for="titleInput" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="titleInput">
        </div>
        <div class="mb-3">
            <label for="titleInput" class="form-label">Img</label>
            <input type="text" class="form-control" name="thumb" id="titleInput">
        </div>
        <div class="mb-3">
            <label for="titleInput" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="titleInput">
        </div>
        <div class="mb-3">
            <label for="titleInput" class="form-label">Series</label>
            <input type="text" class="form-control" name="series" id="titleInput">
        </div>
        <div class="mb-3">
            <label for="titleInput" class="form-label">Sale_date</label>
            <input type="text" class="form-control" name="sale_date" id="titleInput">
        </div>
        <div class="mb-3">
            <label for="titleInput" class="form-label">Type</label>
            <input type="text" class="form-control" name="type" id="titleInput">
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="submit" class="btn btn-danger"><a href="{{ route('comics.index') }}"></a>
                Home</button>


        </div>


    </form>
@endsection
