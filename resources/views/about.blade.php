@extends('layout')

@extends('header')

@section('content')
<div class="about-container ">
    <div class="about-content mt-5">   
        <h3>About Discovering Laravel: </h3>
        <br>
        <h5> Mission: </h5>
        <p>
        Create a small website to discover as much of the framework: Laravel.  For this task we could use any documents we wanted, I used the video tutorials on Laracast and the official documentation. 
        </p>
        <h5> Learning Objectives: </h5>
        <p> 
            <ul>
                <li> Understand the routing system </li>
                <li> Building Views with Blade </li>
                <li> Find out how to access Form data </li>
                <li> Make a database connection and use Eloquent and models </li>
                <li> Install clockwork. Experiment with all the extra debug features it provides. </li>
                <li> Compiling assets with Laravel mix </li>
            </ul>
        </p>
        <h5> Tools: </h5>
        <ul> 
            <li> VSCode: HTML, SCSS, PHP </li>
            <li> Composer </li>
            <li> Laravel: Blade, Eloquent, Laravel mix </li>
            <li> Bootstrap </li>
            <li> Mamp </li>
            <li> Laracast </li>
            <li> TablePlus </li>
            <li> Unsplash for all images </li>
        </ul>
    </div>
</div>
@endsection

@extends('footer')