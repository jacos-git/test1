<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactco extends Model
{
    protected $table = 'contactco';
    protected $guarded = array('opinion_id');

    public static $rules = array(
        'company_id' => 'required',
        'opinion_id' => 'required',
        'opnioncontent' => 'required',
    );

}
