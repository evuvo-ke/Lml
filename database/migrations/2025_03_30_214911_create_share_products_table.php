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
        Schema::create('share_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->unsignedBigInteger('currency_id');
            $table->unsignedBigInteger('share_reference_chart_of_account_id')->nullable();
            $table->unsignedBigInteger('share_suspense_control_chart_of_account_id')->nullable();
            $table->unsignedBigInteger('equity_chart_of_account_id')->nullable();
            $table->unsignedBigInteger('income_from_fees_chart_of_account_id')->nullable();
            $table->text('name');
            $table->text('short_name')->nullable();
            $table->text('description')->nullable();
            $table->integer('decimals')->nullable();
            $table->integer('total_shares')->nullable();
            $table->integer('shares_to_be_issued')->nullable();
            $table->decimal('nominal_price', 65, 6)->nullable();
            $table->decimal('capital_value', 65, 6)->nullable();
            $table->decimal('minimum_shares_per_client', 65, 6)->nullable();
            $table->decimal('default_shares_per_client', 65, 6)->nullable();
            $table->decimal('maximum_shares_per_client', 65, 6)->nullable();
            $table->integer('minimum_active_period')->nullable();
            $table->enum('minimum_active_period_type', ['days', 'weeks', 'months', 'years'])->nullable()->default('days');
            $table->integer('lockin_period')->default(0);
            $table->enum('lockin_type', ['days', 'weeks', 'months', 'years'])->default('days');
            $table->tinyInteger('allow_dividends_for_inactive_clients')->default(0);
            $table->enum('accounting_rule', ['none', 'cash'])->nullable()->default('none');
            $table->tinyInteger('active')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('share_products');
    }
};
