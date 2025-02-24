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
        Schema::create('releases', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('id_type_expense')->constrained('type_expenses')->onDelete('cascade')->nullable();
            $table->foreignId('id_income_type')->constrained('income_types')->onDelete('cascade')->nullable();
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
            $table->date('release_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('releases');
    }
};
