<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('team_id')->unsigned();
            $table->foreign('team_id')
                ->references('id')
                ->on('teams')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('name');
            $table->string('staff');
            $table->text('description');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sub_teams');
    }
}
