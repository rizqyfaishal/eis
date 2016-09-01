<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AsksAsksCategoriesPivot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asks_asks_categories_pivot', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ask_id')->unsigned();
            $table->integer('ask_category_id')->unsigned();
            $table->foreign('ask_id')
                ->references('id')
                ->on('asks')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('ask_category_id')
                ->references('id')
                ->on('ask_categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::drop('asks_asks_categories_pivot');
    }
}
