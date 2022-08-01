<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('window_genres', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedBigInteger('window_id');
            $table->unsignedBigInteger('genre_id');

            // $table->index('window_id','window_genre_window_idx');
            // $table->index('genre_id','window_genre_genre_idx');

            $table->foreign(columns:'window_id',name:'window_genre_window_fk')->on('windows')->references('id');
            $table->foreign(columns:'genre_id',name:'window_genre_genre_fk')->on('genres')->references('id');

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
        Schema::dropIfExists('window_genres');
    }
};
