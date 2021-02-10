<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelfcareTip;

class SelfcareTipsController extends Controller
{

    public function show()
    {
        return view('home', [
            'tips' => SelfcareTip::inRandomOrder()->limit(3)->get()
        ]);

    }
}
