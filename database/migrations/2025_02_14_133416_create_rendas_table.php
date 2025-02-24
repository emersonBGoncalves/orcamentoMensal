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
        Schema::create('rendas', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nome');
            $table->string('descricao');
            $table->foreignId('id_usuario')->constrained('usuarios')->onDelete('cascade');
            $table->foreignId('id_tipo_renda')->constrained('tipos_rendas')->onDelete('cascade');
            $table->decimal('valor', 10, 2);
            $table->date('mes_termino')->date_format('Y-m');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendas');
    }
};
