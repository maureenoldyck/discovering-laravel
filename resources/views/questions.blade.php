@extends('layout')

@section('content')

<div class="m-5 pt-3"> 
  @foreach ($questions as $question)
  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">{{$question->firstName}} {{$question->lastName}}</h5>
      <h6 class="card-title">{{$question->email}}</h6>
      <p class="card-text">{{$question->question}} </p>
      <form method="POST" action="/questions/{{$question->id}}">
        @csrf
        <input type="submit" name="answered" class="btn btn-info" id="answered" value="Answered" @if ($question->answered == 1) disabled @endif>
      </form>
    </div>
  </div>
  @endforeach
</div>

@endsection