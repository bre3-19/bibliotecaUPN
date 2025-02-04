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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->integer('cantidad');
            $table->string('autor');
            $table->integer('anio');
            $table->enum('tipo', ['Libro', 'Tesis', 'Otro']);
            $table->integer('contenedor');
            $table->string('lado');
            $table->integer('nivel');
            $table->enum('cara', ['Norte', 'Sur']);
            $table->integer('numero');
            $table->string('imagen')->nullable();

            $table->foreignId('clasificacion_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
