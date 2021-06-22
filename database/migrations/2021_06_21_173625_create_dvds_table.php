<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDvdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dvds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id'); //Categoria: ANIME, DORAMA
            $table->unsignedBigInteger('type_id'); //Tipo: SERIE, PELICULA
            $table->string('title');
            $table->string('slug');
            $table->string('gender')->nullable(); //Género
            $table->string('language')->nullable(); //Idioma
            $table->integer('number_discs')->nullable(); //Número de discos
            $table->date('release_date')->nullable(); //Fecha de estreno
            $table->unsignedBigInteger('product_id');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dvds');
    }
}
