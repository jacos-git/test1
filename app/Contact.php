<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $guarded = array('opinion_id');

    public static $rules = array(
        'user_id' => 'required',
        'opinion_id' => 'required',
        'opnioncontent' => 'required',
    );

}
