<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $guarded=array('community_id');
    protected $table ='community';

    public static $rules=array(
        'community_id'=>'required',
        'leader_id'=>'required',
        'community_name'=>'required',
        'level'=>'required',
    );

}
