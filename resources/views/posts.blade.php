@extends('layout')

@section('content')
    <div class="title m-b-md">
        <h1> Hello World</h1>
        <p> {{ $post->body }}</p>
    </div>
@endsection