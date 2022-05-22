<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructoreventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructorevents', function (Blueprint $table) {
            $table->id();
            // tabla 1
            $table->foreignId('id_evento')
            ->nullable()
            ->constrained('events')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            //tabla 2
            $table->foreignId('id_instructor')
            ->nullable()
            ->constrained('instructors')
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
        Schema::dropIfExists('instructorevents');
    }
}
