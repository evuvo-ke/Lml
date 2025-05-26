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
        Schema::create('payroll_templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->decimal('work_duration', 65)->default(0);
            $table->string('duration_unit')->nullable();
            $table->decimal('amount_per_duration', 65)->default(0);
            $table->decimal('total_duration_amount', 65)->default(0);
            $table->text('picture')->nullable();
            $table->text('description')->nullable();
            $table->text('items')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payroll_templates');
    }
};
