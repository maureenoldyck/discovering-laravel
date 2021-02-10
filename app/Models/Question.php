<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Question extends Model
{
    protected $fillable = ['firstName', 'lastName', 'email', 'question'];

    use HasFactory;

    public function answered()
    {
        $this->answered = true; 
        $this->save();
    }

}
