<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trophy extends Model
{
    protected $guarded=array('trophy_id');
    protected $table ='trophy';

    public static $rules=array(
        'trophy_id'=>'required',
        'trophyname'=>'required',
    );
}
