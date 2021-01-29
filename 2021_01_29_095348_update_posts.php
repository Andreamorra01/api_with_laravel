<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titolo');
            $table->string('testo');
            $table->timestamps();
            $table->integer('authors_id')->unsigned();
            $table->foreign('authors_id')
            ->references('id')
            ->on('authors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}