<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded=array('event_id');
    protected $table ='event';

    public static $rules=array(
        'event_id'=>'required',
        'event'=>'required',
        'period'=>'required',
        'create_day'=>'required',
    );
}
