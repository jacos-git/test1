<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $guarded = array('site_id');
    protected $table = 'site';

    public static $rules = array(
        'site_id' => 'required',
        'site_name' => 'required',
        'site_ig' => 'required',
        'site_url' => 'required',
    );
}

