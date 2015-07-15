<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 80);
            $table->string('description_short', 80)->nullable();
            $table->string('alias', 30)->nullable();
            $table->tinyInteger('count_votes', false, true)->default(1);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->date('date');
            $table->integer('process_id')->unsigned();

            $table->foreign('process_id')
                ->references('id')
                ->on('processes')
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
        Schema::drop('elections');
    }

}
