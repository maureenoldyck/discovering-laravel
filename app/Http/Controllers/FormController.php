<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;


class FormController extends Controller
{

    public function create()
    {

        return view('form');

    }

    public function store(Request $request)
    {

        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email:rfc,dns',
            'question' => 'required'
        ]);

        Question::create($request->all());


        $alert = "Thank you for your question, we will try to get to you as quick as possible! Have a great day!";

        return view('form')->with('alert', $alert);

    }


    public function show()
    {
        return view('questions', [
            'questions' => Question::all()
        ]);
    }

    public function update($id)
    {

        $question = Question::find($id);

        $question->answered();

        return redirect('questions');
    }

}
