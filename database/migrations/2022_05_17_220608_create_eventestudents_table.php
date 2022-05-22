<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventestudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventestudents', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_evento')
            ->nullable()
            ->constrained('events')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_estudiante')
            ->nullable()
            ->constrained('estudiantes')
            ->cascadeOnUpdate()
            ->nullOnDelete();


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
        Schema::dropIfExists('eventestudents');
    }
}
