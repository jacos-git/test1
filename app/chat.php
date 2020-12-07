<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    protected $table = "chat";
    protected $guarded=array('chat_id');

    public static $rules=array(
        'chat_id'=>'required',
        'user_id'=>'required',
        'coment'=>'required',
        'sendtime'=>'required'
    );

}
