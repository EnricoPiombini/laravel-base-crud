@extends('layouts.app')


@section('page_title', $comic->id)



@section('page_content')
    <p>{{ $comic->description }}</p>

    
@endsection
