<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class FormController extends Controller
{

    public function create()
    {

        return view('form');

    }

    public function store()
    {

        Question::create(request()->all());

        $alert = "Thank you for your question, we will try to get to you as quick as possible! Have a great day!";

        return view('form')->with('alert', $alert);

    }


    public function show()
    {
        return view('questions', [
            'questions' => App\Question::all()
        ]);
    }

}
