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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('description');
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
            $table->foreignId('id_type_expense')->constrained('type_expenses')->onDelete('cascade');
            $table->decimal('value', 10, 2);
            $table->date('month_end')->date_format('Y-m');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
