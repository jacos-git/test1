<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trophyac extends Model
{
    protected $guarded=array('trophy_id');
    protected $table ='trophyac';

    public static $rules=array(
        'trophy_id'=>'required',
        'user_id'=>'required',
        'date'=>'required',
    );
}
