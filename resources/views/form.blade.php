@extends('layout')

@section('content')
@if (isset($alert))
    <div class="alert alert-success" role="alert">
        {{$alert ?? ''}}
    </div>
@endif
<h4> For more info about self care: </h4>
<br>
<form method="POST" action="/contact">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="text" name="firstName" class="form-control" id="inputFirstName" placeholder="First Name">
            <p class="invalid-feedback"> {{ $errors->first('firstName')}}</p>
        </div>
        <div class="form-group col-md-6">
            <input type="text" name="lastName" class="form-control" id="inputLastName" placeholder="Last Name">
            <p class="invalid-feedback"> {{$errors->first('lastName')}}</p>
        </div>
    </div>
    <div class="form-group">
        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
        <p class="invalid-feedback"> {{$errors->first('email')}}</p>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="question" id="inputQuestion" rows="3" placeholder="Your Question"></textarea>
        <p class="invalid-feedback"> {{$errors->first('question')}}</p>
    </div>
    <button type="submit" class="btn btn-info">Send</button>
</form>
@endsection

