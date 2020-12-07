<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('goods_id');
            $table->string('goods_name');
            $table->string('goods_image');
            $table->integer('price');
            $table->string('category1');
            $table->string('category2');
            $table->char('size');
            $table->string('color');
            $table->char('sex');
            $table->integer('company_id')->unsigned();
            $table->timestamps();

            $table->foreign('company_id')
            ->references('id')
            ->on('company')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
}
