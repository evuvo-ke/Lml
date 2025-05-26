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
        Schema::create('payroll_items_meta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('payroll_id')->nullable();
            $table->unsignedBigInteger('payroll_item_id')->nullable();
            $table->decimal('percentage', 65)->nullable();
            $table->string('name')->nullable();
            $table->enum('type', ['allowance', 'deduction']);
            $table->enum('amount_type', ['fixed', 'percentage']);
            $table->decimal('amount', 65);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payroll_items_meta');
    }
};
