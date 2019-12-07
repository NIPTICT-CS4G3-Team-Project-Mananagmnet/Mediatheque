<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path');
            $table->string('name')->nullable();
            $table->date('date');
            $table->text('description');
            $table->integer('album_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->foreign('album_id')
            ->references('id')->on('albums')
            ->onDelete('restrict');

            $table->foreign('category_id')
            ->references('id')->on('categories')
            ->onDelete('restrict');

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
        Schema::dropIfExists('photos');
    }
}
