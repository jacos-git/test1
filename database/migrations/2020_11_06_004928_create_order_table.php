<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('order_id');
            $table->integer('goods_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->datetime('date');
            $table->timestamps();

            $table->foreign('goods_id')
            ->references('goods_id')
            ->on('goods')
            ->onDelete('cascade');

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
