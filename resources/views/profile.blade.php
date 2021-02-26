@extends('layout')

@extends('header-profile')

@section('content')
<div class="container">
<div class="container-profile mt-5">
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
                            </form>
                        </div>
                        <div class="col-8">
                            <h4> Your Self Care Diary: </h4>
                            <form method="POST" action="{{ route('profile.post') }}">
                                @csrf
                                <div class="form-group">
                                    <textarea class="form-control" name="post" rows="3" placeholder="Your Self Care Entry"></textarea>   
                                </div>
                                <button type="submit" class="btn btn-secondary mb-5">Post</button>
                            </form>
                            @foreach ($posts as $post)
                            <div class="card post mb-3">
                                <div class="row no-gutters">
                                    <div class="col-2 align-self-center justify-content-center">
                                        @if (auth()->user()->image)
                                        <img class="w-50 " src="{{ asset(auth()->user()->image) }}">
                                        @endif
                                    </div>
                                    <div class="col-10">
                                        <div class="card-block px-2">
                                            <div class="card-body">
                                                <p class="card-text text-left">{{$post->post}} </p>
                                                <p class="card-text"><small class="text-muted">Published on: {{$post->created_at}}</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@extends('footer')
