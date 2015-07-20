<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScopesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scopes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 8);
            $table->string('description', 100);
            $table->integer('scope_parent')->unsigned()->nullable();
            $table->integer('type_scope_id')->unsigned();

            $table->foreign('scope_parent')
                ->references('id')
                ->on('scopes')
                ->onDelete('cascade');

            $table->foreign('type_scope_id')
                ->references('id')
                ->on('type_scopes')
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
        Schema::drop('scopes');
    }

}
