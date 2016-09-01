<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAsksTable3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asks', function (Blueprint $table) {
            $table->integer('comments_count')->unsigned()->default(1)->nullable();
            $table->boolean('isRoot')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asks', function (Blueprint $table) {
            $table->dropColumn('isRoot');
            $table->dropColumn('comments_count');
        });
    }
}
