<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    protected $table = 'grades';
    protected $guarded = array('grades_id');

    public static $rules = array(
        'user_id' => 'required',
        'run' => 'required|numeric',
        'kcal' => 'required|numeric',
        'step' => 'required|numeric',
        'day' => 'required'
    );

}
