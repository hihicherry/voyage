<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 250);
            $table->integer('genre');
            $table->string('artworkPath', 500);
            $table->timestamps();
            $table->unsignedBigInteger('artist_id')->index();
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('albums', function(Blueprint $table){
             $table->dropForeign(['artist_id']);
        });
        Schema::dropIfExists('albums');
    }
}
