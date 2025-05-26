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
        Schema::create('savings_charges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('created_by_id')->nullable()->index('savings_charges_created_by_id_foreign');
            $table->unsignedBigInteger('currency_id')->index('savings_charges_currency_id_foreign');
            $table->unsignedBigInteger('savings_charge_type_id')->index('savings_charges_savings_charge_type_id_foreign');
            $table->unsignedBigInteger('savings_charge_option_id')->index('savings_charges_savings_charge_option_id_foreign');
            $table->text('name');
            $table->decimal('amount', 65, 6);
            $table->decimal('min_amount', 65, 6)->nullable();
            $table->decimal('max_amount', 65, 6)->nullable();
            $table->enum('payment_mode', ['regular', 'account_transfer'])->default('regular');
            $table->tinyInteger('schedule')->default(0);
            $table->integer('schedule_frequency')->nullable();
            $table->enum('schedule_frequency_type', ['days', 'weeks', 'months', 'years'])->nullable();
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
        Schema::dropIfExists('savings_charges');
    }
};
