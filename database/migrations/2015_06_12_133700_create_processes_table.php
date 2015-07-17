<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 80);
            $table->string('description_short', 50)->nullable();
            $table->string('alias', 30);
            $table->dateTime('date_begin');
            $table->dateTime('date_end');
            $table->string('public_key', 1000);
            $table->string('path_simbols', 100);
            $table->enum('status', ['active', 'inactive', 'final'])->default('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('processes');
    }

}
