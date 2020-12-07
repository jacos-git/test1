<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infomation extends Model
{
    protected $guarded=array('info_id');
    protected $table ='infomation';

    public static $rules=array(
        'info_id'=>'required',
        'info_name'=>'required',
        'content'=>'required',
    );
}
