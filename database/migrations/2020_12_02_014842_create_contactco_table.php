<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactcoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactco', function (Blueprint $table) {
            $table->increments('opinion_id');
            $table->integer('company_id')->unsigned();
            $table->text('opinioncontent');
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
        Schema::dropIfExists('contactco');
    }
}
