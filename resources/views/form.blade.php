@extends('layout')

@extends('header')

@section('content')
<div class="content container-fluid flex-column mt-5"> 

@if (isset($alert))
    <div class="alert alert-success" role="alert">
        {{$alert ?? ''}}
    </div>
@elseif ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h4> For more info about self care: </h4>
<br>
<form method="POST" action="/contact">
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
    <button type="submit" class="btn btn-secondary">Send</button>
</form>
</div>

@endsection

@extends('footer')