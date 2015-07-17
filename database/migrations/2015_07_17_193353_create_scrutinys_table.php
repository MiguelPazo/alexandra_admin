<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScrutinysTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scrutinys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 8);
            $table->integer('order');
            $table->integer('scope_id')->unsigned();
            $table->integer('organization_id')->unsigned();
            $table->integer('votes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('scrutinys');
    }

}
