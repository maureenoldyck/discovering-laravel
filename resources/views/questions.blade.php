@extends('layout')

@section('content')

@foreach ($questions as $question)
<div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">{{$question->firstName}} {{$question->lastName}}</h5>
      <h6 class="card-title">{{$question->email}}</h6>
      <p class="card-text">{{$question->question}} </p>
    </div>
</div>
@endforeach

@endsection