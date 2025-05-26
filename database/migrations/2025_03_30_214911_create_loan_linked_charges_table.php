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
        Schema::create('loan_linked_charges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('loan_id')->index();
            $table->unsignedBigInteger('loan_charge_id');
            $table->unsignedBigInteger('loan_charge_type_id')->nullable();
            $table->unsignedBigInteger('loan_charge_option_id')->nullable();
            $table->unsignedBigInteger('loan_transaction_id')->nullable();
            $table->text('name')->nullable();
            $table->decimal('amount', 65, 6);
            $table->decimal('calculated_amount', 65, 6)->nullable();
            $table->decimal('amount_paid_derived', 65, 6)->nullable();
            $table->decimal('amount_waived_derived', 65, 6)->nullable();
            $table->decimal('amount_written_off_derived', 65, 6)->nullable();
            $table->decimal('amount_outstanding_derived', 65, 6)->nullable();
            $table->tinyInteger('is_penalty')->default(0);
            $table->tinyInteger('waived')->default(0);
            $table->tinyInteger('is_paid')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_linked_charges');
    }
};
