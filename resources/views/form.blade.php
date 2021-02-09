@extends('layout')

@section('content')
<h4> For more info about self care: </h4>
<br>
<form method="POST" action="/form">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="text" name="firstName" class="form-control" id="inputFirstName" placeholder="First Name">
        </div>
        <div class="form-group col-md-6">
            <input type="text" name="lastName" class="form-control" id="inputLastName" placeholder="Last Name">
        </div>
    </div>
    <div class="form-group">
        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group">
        <textarea class="form-control" name="question" id="inputQuestion" rows="3" placeholder="Your Question"></textarea>
    </div>
    <button type="submit" class="btn btn-info">Send</button>
</form>
@endsection

