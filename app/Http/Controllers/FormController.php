<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class FormController extends Controller
{
    public function create()
    {

        return view('form');

    }

    public function store()
    {

        Question::create(request()->all());

        return redirect('/contact');

    }


    public function show()
    {
        return App\Question::all();

        // return view('questions');
    }

}
