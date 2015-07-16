<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeScopesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_scopes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 100);
            $table->string('alias', 100)->nullable();
            $table->enum('type', ['agrupols', 'voters'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('type_scopes');
    }

}
