@extends('layout')

@extends('header-profile')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> {{ Auth::user()->name }}</div>
                    @if (auth()->user()->image)
                    <img class="card-img-top" src="{{ asset(auth()->user()->image) }}">
                    @endif
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 border">
                            <form action="{{ route('profile.update') }}" method="POST" role="form" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="profile_image" class="col-md-4 col-form-label text-md-right">Profile Image</label>
                                    <div class="col-md-6">
                                        <input id="profile_image" type="file" class="form-control" name="profile_image">
                                        @if (auth()->user()->image)
                                            <code>{{ auth()->user()->image }}</code>
                                        @endif
                                    </div>
                                </div>
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
