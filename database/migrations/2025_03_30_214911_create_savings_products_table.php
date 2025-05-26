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
        Schema::create('savings_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->unsignedBigInteger('currency_id');
            $table->unsignedBigInteger('savings_reference_chart_of_account_id')->nullable();
            $table->unsignedBigInteger('overdraft_portfolio_chart_of_account_id')->nullable();
            $table->unsignedBigInteger('savings_control_chart_of_account_id')->nullable();
            $table->unsignedBigInteger('interest_on_savings_chart_of_account_id')->nullable();
            $table->unsignedBigInteger('write_off_savings_chart_of_account_id')->nullable();
            $table->unsignedBigInteger('income_from_fees_chart_of_account_id')->nullable();
            $table->unsignedBigInteger('income_from_penalties_chart_of_account_id')->nullable();
            $table->unsignedBigInteger('income_from_interest_overdraft_chart_of_account_id')->nullable();
            $table->text('name');
            $table->text('short_name')->nullable();
            $table->text('description')->nullable();
            $table->integer('decimals')->nullable();
            $table->enum('savings_category', ['voluntary', 'compulsory']);
            $table->tinyInteger('auto_create')->default(0);
            $table->decimal('minimum_interest_rate', 65, 6);
            $table->decimal('default_interest_rate', 65, 6);
            $table->decimal('maximum_interest_rate', 65, 6);
            $table->enum('interest_rate_type', ['day', 'week', 'month', 'year'])->default('year');
            $table->enum('compounding_period', ['daily', 'weekly', 'monthly', 'biannual', 'annually']);
            $table->enum('interest_posting_period_type', ['daily', 'weekly', 'monthly', 'biannual', 'annually']);
            $table->enum('interest_calculation_type', ['daily_balance', 'average_daily_balance'])->default('daily_balance');
            $table->decimal('automatic_opening_balance', 65, 6)->default(0);
            $table->decimal('minimum_balance_for_interest_calculation', 65, 6)->default(0);
            $table->integer('lockin_period')->default(0);
            $table->enum('lockin_type', ['days', 'weeks', 'months', 'years'])->default('days');
            $table->decimal('minimum_balance', 65, 6)->default(0);
            $table->tinyInteger('allow_overdraft')->default(0);
            $table->decimal('overdraft_limit', 65, 6)->nullable();
            $table->decimal('overdraft_interest_rate', 65, 6)->nullable();
            $table->decimal('minimum_overdraft_for_interest', 65, 6)->nullable();
            $table->enum('days_in_year', ['actual', '360', '365', '364'])->nullable()->default('365');
            $table->enum('days_in_month', ['actual', '30', '31'])->nullable()->default('30');
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
        Schema::dropIfExists('savings_products');
    }
};
