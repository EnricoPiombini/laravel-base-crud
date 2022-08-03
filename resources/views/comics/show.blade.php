@extends('layouts.app')


@section('page_title')



@section('page_content')

    <p>{{ $comic->description }}</p>

    <a href="{{ route('comics.index') }}" class="btn btn-secondary">Torna alla home</a>







@endsection
