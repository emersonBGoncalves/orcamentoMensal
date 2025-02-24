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
        Schema::create('lancamentos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('id_tipo_despesa')->constrained('tipos_despesas')->onDelete('cascade')->nullable();
            $table->foreignId('id_tipo_renda')->constrained('tipos_rendas')->onDelete('cascade')->nullable();
            $table->foreignId('id_usuario')->constrained('usuarios')->onDelete('cascade');
            $table->date('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lancamentos');
    }
};
