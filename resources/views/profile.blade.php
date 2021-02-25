@extends('layout')

@extends('header-profile')

@section('content')
<div class="container mt-5">
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> {{ Auth::user()->name }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 border">
                            @if (auth()->user()->image)
                                <img class="card-img-top" src="{{ asset(auth()->user()->image) }}">
                            @endif
                            <form action="{{ route('profile.update') }}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <input id="profile_image" type="file" class="form-control" name="profile_image">
                            <div class="form-group row mb-0 mt-5">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-8 border">
                          2-2
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('footer')
