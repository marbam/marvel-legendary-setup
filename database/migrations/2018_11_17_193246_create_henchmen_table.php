<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHenchmenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('henchmen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->unsignedInteger('deck_id');
            $table->foreign('deck_id')->references('id')->on('decks');
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
        Schema::table('henchmen', function (Blueprint $table) {
            $table->dropForeign(['deck_id']);
        });
        Schema::dropIfExists('henchmen');
    }
}
