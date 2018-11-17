<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroskillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heroskills', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('hero_id');
            $table->foreign('hero_id')->references('id')->on('heroes');
            $table->unsignedInteger('skill_id');
            $table->foreign('skill_id')->references('id')->on('skills');
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
        Schema::table('heroskills', function (Blueprint $table) {
            $table->dropForeign(['hero_id']);
            $table->dropForeign(['skill_id']);
        });
        Schema::dropIfExists('heroskills');
    }
}
