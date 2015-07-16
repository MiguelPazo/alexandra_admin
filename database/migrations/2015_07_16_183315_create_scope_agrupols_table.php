<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScopeAgrupolsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scope_agrupols', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 8);
            $table->integer('order');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->integer('scope_id')->unsigned();
            $table->integer('agrupol_id')->unsigned();

            $table->foreign('scope_id')
                ->references('id')
                ->on('scopes')
                ->onDelete('cascade');

            $table->foreign('agrupol_id')
                ->references('id')
                ->on('agrupols')
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
        Schema::drop('scope_agrupols');
    }
}
