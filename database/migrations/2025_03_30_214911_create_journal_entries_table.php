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
        Schema::create('journal_entries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('created_by_id')->nullable()->index('created_by_id_index');
            $table->string('transaction_number')->nullable();
            $table->unsignedBigInteger('payment_detail_id')->nullable();
            $table->unsignedBigInteger('branch_id')->nullable()->index('branch_id_index');
            $table->unsignedBigInteger('currency_id')->nullable()->index('currency_id_index');
            $table->unsignedBigInteger('chart_of_account_id')->nullable()->index('chart_of_account_id_index');
            $table->string('transaction_type')->nullable();
            $table->string('transaction_sub_type')->nullable();
            $table->text('name')->nullable();
            $table->date('date')->nullable();
            $table->string('month')->nullable();
            $table->string('year')->nullable();
            $table->string('reference')->nullable();
            $table->integer('client_id')->nullable()->index('client_id_index');
            $table->decimal('debit', 65, 4)->nullable();
            $table->decimal('credit', 65, 4)->nullable();
            $table->decimal('balance', 65, 4)->nullable();
            $table->tinyInteger('active')->default(1);
            $table->tinyInteger('reversed')->default(0);
            $table->tinyInteger('reversible')->default(1);
            $table->tinyInteger('manual_entry')->default(0);
            $table->string('receipt')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journal_entries');
    }
};
