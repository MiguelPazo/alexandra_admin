<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScopeOrganizationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scope_organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 8);
            $table->integer('order');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->integer('scope_id')->unsigned();
            $table->integer('organization_id')->unsigned();
            $table->integer('election_id')->unsigned();

            $table->foreign('scope_id')
                ->references('id')
                ->on('scopes')
                ->onDelete('cascade');

            $table->foreign('organization_id')
                ->references('id')
                ->on('organizations')
                ->onDelete('cascade');

            $table->foreign('election_id')
                ->references('id')
                ->on('elections')
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
        Schema::drop('scope_organizations');
    }
}
