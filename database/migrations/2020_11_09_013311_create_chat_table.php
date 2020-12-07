<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat', function (Blueprint $table) {
            $table->increments('chat_id');
            $table->integer('user_id')->unsigned();
            $table->integer('community_id')->unsigned();
            $table->text('comment');
            $table->datetime('sendtime');
            $table->timestamps();

            $table->foreign('community_id')
            ->references('community_id')
            ->on('community')
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
        Schema::dropIfExists('chat');
    }
}
