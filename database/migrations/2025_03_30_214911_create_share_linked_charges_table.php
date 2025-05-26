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
        Schema::create('share_linked_charges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->unsignedBigInteger('currency_id')->nullable();
            $table->unsignedBigInteger('share_id')->nullable();
            $table->unsignedBigInteger('share_charge_id')->nullable();
            $table->unsignedBigInteger('share_charge_type_id')->nullable();
            $table->unsignedBigInteger('share_charge_option_id')->nullable();
            $table->unsignedBigInteger('share_transaction_id')->nullable();
            $table->text('name')->nullable();
            $table->decimal('amount', 65, 6);
            $table->decimal('calculated_amount', 65, 6)->nullable();
            $table->decimal('paid_amount', 65, 6)->nullable();
            $table->tinyInteger('active')->default(0);
            $table->tinyInteger('waived')->default(0);
            $table->tinyInteger('is_paid')->default(0);
            $table->date('submitted_on')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('share_linked_charges');
    }
};
