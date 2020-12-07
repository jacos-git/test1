<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
        protected $guarded=array('order_id');
    protected $table ='order';

    public static $rules=array(
        'order_id'=>'required',
        'goods_id'=>'required',
        'user_id'=>'required',
        'date'=>'required',
    );

}
