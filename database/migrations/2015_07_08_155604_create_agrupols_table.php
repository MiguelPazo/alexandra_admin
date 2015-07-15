<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgrupolsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agrupols', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 8);
            $table->string('description', 80);
            $table->integer('type_agrupol_id')->unsigned();

            $table->foreign('type_agrupol_id')
                ->references('id')
                ->on('type_agrupols')
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
        Schema::drop('agrupols');
    }

}
