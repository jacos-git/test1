<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrophyacTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trophyac', function (Blueprint $table) {
            $table->integer('trophy_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->date('date');
            $table->timestamps();

            $table->primary(['trophy_id', 'user_id']);

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('trophy_id')
            ->references('trophy_id')
            ->on('trophy')
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
        Schema::dropIfExists('trophyac');
    }
}
