<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num_ele', 10);
            $table->string('name', 50);
            $table->string('lastname_first', 50)->nullable();
            $table->string('lastname_second', 50)->nullable();
            $table->string('pin', 100)->nullable();
            $table->enum('status', ['pending', 'vote', 'nvote'])->default('pending');
            $table->enum('type_vote', ['att', 'online'])->nullable();
            $table->date('birthdate')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->boolean('enabled')->default(true);
            $table->string('address', 300)->nullable();
            $table->tinyInteger('phone', false, true)->nullable();
            $table->tinyInteger('cellphone', false, true)->nullable();
            $table->string('email', 80)->nullable();

            $table->string('scope_charters', 50)->nullable();
            $table->integer('scope_vote')->unsigned()->nullable();
            $table->integer('scope_id')->unsigned()->nullable();

            $table->foreign('scope_id')
                ->references('id')
                ->on('scopes')
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
        Schema::drop('voters');
    }

}
