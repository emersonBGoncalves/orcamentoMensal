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
        Schema::create('tipos_rendas', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nome')->unique();
            $table->string('descricao');
            $table->foreignId('id_usuario')->constrained('usuarios')->onDelete('cascade');
            $table->string('cor');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_rendas');
    }
};
