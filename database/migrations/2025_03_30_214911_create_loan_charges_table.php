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
        Schema::create('loan_charges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->unsignedBigInteger('currency_id');
            $table->unsignedBigInteger('loan_charge_type_id');
            $table->unsignedBigInteger('loan_charge_option_id');
            $table->text('name');
            $table->decimal('amount', 65, 6);
            $table->decimal('min_amount', 65, 6)->nullable();
            $table->decimal('max_amount', 65, 6)->nullable();
            $table->enum('payment_mode', ['regular', 'account_transfer'])->default('regular');
            $table->tinyInteger('schedule')->nullable()->default(0);
            $table->integer('schedule_frequency')->nullable();
            $table->enum('schedule_frequency_type', ['days', 'weeks', 'months', 'years'])->nullable();
            $table->tinyInteger('is_penalty')->nullable()->default(0);
            $table->tinyInteger('active')->default(0);
            $table->tinyInteger('allow_override')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_charges');
    }
};
