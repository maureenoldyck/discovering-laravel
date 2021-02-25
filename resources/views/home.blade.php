@extends('layout')

@extends('header')

@section('content')
<div class="title-container full-height flex-fill flex-center ">
    <h1>Your Daily Dose <br> of Self Care! </h1>
</div>
<div class="content container-fluid full-height mt-5 pt-5">
    <h4 class="m-b-md"> If you read this, take 5 minutes for self care!</h4>
    <div class="flex-center">
    <div class="card-deck">
        @foreach ($tips as $tip)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$tip->title}}</h5>
                    <hr class="title-line">
                    <p class="card-text">{{$tip->body}}</p>
                </div>
            </div>
        @endforeach
    </div>
    </div>
</div>
<div class="flex-container">
    <div class="left-side">
        <img src="images/cat.jpeg" alt="cat">
    </div>
    <div class="right-side mt-5">
        <h4> About </h4> 
        <hr class="title-line">
        <p> There are a number of definitions of self-care produced by different authorities at different times – the World Health Organisation for example has produced three much-cited definitions (in 1983, 1998 and 2009). The WHO 1998 definition is:
            ‘Self-Care is what people do for themselves to establish and maintain health, and to prevent and deal with illness. It is a broad concept encompassing hygiene (general and personal), nutrition (type and quality of food eaten), lifestyle (sporting activities, leisure etc), environmental factors (living conditions, social habits, etc.) socio-economic factors (income level, cultural beliefs, etc.) and self-medication.’</p>
    </div>
</div>



@endsection

@extends('footer')