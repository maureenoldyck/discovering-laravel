@extends('layout')

@section('content')
<div class="title m-b-md">
    Laravel
</div>
<h4> If you read this, take 5 minutes for self care!</h4>
<div class="card-group">
    @foreach ($tips as $tip)
    <div class="card border-info">
        <div class="card-body">
            <h5 class="card-title text-info">{{$tip->title}}</h5>
            <p class="card-text">{{$tip->body}}</p>
        </div>
    </div>
    @endforeach
</div>
<h6> <a href="http://www.theartofpureliving.com/5-minute-self-care-ideas-for-when-you-are-overwhelmed/"> Source </a></h6>

@endsection
