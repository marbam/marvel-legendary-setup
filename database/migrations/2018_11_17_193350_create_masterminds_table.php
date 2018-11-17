<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMastermindsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterminds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->char('always_leads_type');
            $table->unsignedInteger('always_leads_id'); // should be a foreign key, but it'll vary on table.
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
        Schema::table('masterminds', function (Blueprint $table) {
            $table->dropForeign(['deck_id']);
        });
        Schema::dropIfExists('masterminds');
    }
}
