<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $guarded=array('goods_id');
    protected $table ='goods';

    public static $rules=array(
        'goods_id'=>'required',
        'goods_name'=>'required',
        'goods_image'=>'required',
        'price'=>'required|numeric',
        'category1'=>'required',
        'category2'=>'required',
        'size'=>'required',
        'color'=>'required',
        'sex'=>'required',
        'company_id'=>'required',
    );
}
