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
            $table->string('pin', 60)->nullable();
            $table->enum('status', ['pending', 'vote', 'nvote'])->default('pending');
            $table->enum('type_vote', ['att', 'online'])->nullable();
            $table->date('birthdate')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->boolean('disability')->default(false);
            $table->string('address',300)->nullable();
            $table->tinyInteger('phone', false, true)->nullable();
            $table->tinyInteger('cellphone', false, true)->nullable();
            $table->string('email', 80)->nullable();
            $table->string('twitter', 50)->nullable();
            $table->string('facebook', 50)->nullable();
            $table->integer('process_id')->unsigned();

            $table->foreign('process_id')
                ->references('id')
                ->on('processes')
                ->onDelete('cascade');

//7	C_MESA_REC	CHAR (6 CHAR)
//8	C_MESA_REC_VOTO	CHAR (6 CHAR)
//15	C_UBIGEO_ELEC	CHAR (6 CHAR)
//17	C_MESA_PK	CHAR (6 CHAR)
//18	N_PROCESO_PK	NUMERIC (1)
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
