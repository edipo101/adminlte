<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name', 25);
            $table->string('description')->nullable();
            $table->enum('priority', ['HIGH', 'MEDIUM', 'LOW'])->defalult('MEDIUM'); //Prioridad: Alta, media y baja
            $table->dateTime('scheduled_date')->nullable(); // Fecha programada
            $table->string('duration_estimate')->nullable(); //Duración de estimación
            $table->dateTime('start_date')->nullable(); // Fecha de inicio
            $table->dateTime('end_date')->nullable(); // Fecha de inicio

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
        Schema::dropIfExists('tasks');
    }
}
