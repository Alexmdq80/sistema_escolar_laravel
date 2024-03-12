<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('escuela_PI', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->mediumInteger('id_escuela')->unsigned();
            $table->foreign('id_escuela')->references('id')->on('escuela');
            $table->unsignedSmallInteger('id_propuesta_institucional');
            $table->foreign('id_propuesta_institucional')->references('id')->on('propuesta_institucional');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escuela_PI');
    }
};
