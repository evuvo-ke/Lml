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
        Schema::create('savings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->unsignedBigInteger('currency_id');
            $table->unsignedBigInteger('savings_officer_id')->nullable();
            $table->unsignedBigInteger('savings_product_id')->nullable();
            $table->enum('client_type', ['client', 'group'])->nullable()->default('client');
            $table->unsignedBigInteger('client_id')->nullable()->index();
            $table->unsignedBigInteger('group_id')->nullable();
            $table->unsignedBigInteger('branch_id')->nullable()->index();
            $table->string('account_number')->nullable();
            $table->string('external_id')->nullable();
            $table->integer('decimals')->nullable();
            $table->decimal('interest_rate', 65, 6);
            $table->enum('interest_rate_type', ['day', 'week', 'month', 'year'])->default('year');
            $table->enum('compounding_period', ['daily', 'weekly', 'monthly', 'biannual', 'annually']);
            $table->enum('interest_posting_period_type', ['daily', 'weekly', 'monthly', 'biannual', 'annually']);
            $table->enum('interest_calculation_type', ['daily_balance', 'average_daily_balance'])->default('daily_balance');
            $table->decimal('balance_derived', 65, 6)->default(0);
            $table->decimal('total_deposits_derived', 65, 6)->default(0);
            $table->decimal('total_withdrawals_derived', 65, 6)->default(0);
            $table->decimal('total_interest_posted_derived', 65, 6)->default(0);
            $table->decimal('minimum_balance_for_interest_calculation', 65, 6)->default(0);
            $table->integer('lockin_period')->default(0);
            $table->enum('lockin_type', ['days', 'weeks', 'months', 'years'])->default('days');
            $table->decimal('automatic_opening_balance', 65, 6)->default(0);
            $table->tinyInteger('allow_overdraft')->default(0);
            $table->decimal('overdraft_limit', 65, 6)->nullable();
            $table->decimal('overdraft_interest_rate', 65, 6)->nullable();
            $table->decimal('minimum_overdraft_for_interest', 65, 6)->nullable();
            $table->date('submitted_on_date')->nullable();
            $table->unsignedBigInteger('submitted_by_user_id')->nullable();
            $table->date('approved_on_date')->nullable();
            $table->unsignedBigInteger('approved_by_user_id')->nullable();
            $table->text('approved_notes')->nullable();
            $table->date('activated_on_date')->nullable();
            $table->unsignedBigInteger('activated_by_user_id')->nullable();
            $table->text('activated_notes')->nullable();
            $table->date('rejected_on_date')->nullable();
            $table->unsignedBigInteger('rejected_by_user_id')->nullable();
            $table->text('rejected_notes')->nullable();
            $table->date('dormant_on_date')->nullable();
            $table->unsignedBigInteger('dormant_by_user_id')->nullable();
            $table->text('dormant_notes')->nullable();
            $table->date('closed_on_date')->nullable();
            $table->unsignedBigInteger('closed_by_user_id')->nullable();
            $table->text('closed_notes')->nullable();
            $table->date('inactive_on_date')->nullable();
            $table->unsignedBigInteger('inactive_by_user_id')->nullable();
            $table->text('inactive_notes')->nullable();
            $table->date('withdrawn_on_date')->nullable();
            $table->unsignedBigInteger('withdrawn_by_user_id')->nullable();
            $table->text('withdrawn_notes')->nullable();
            $table->enum('status', ['pending', 'approved', 'active', 'withdrawn', 'rejected', 'closed', 'inactive', 'dormant', 'submitted'])->default('submitted');
            $table->date('start_interest_posting_date')->nullable();
            $table->date('next_interest_posting_date')->nullable();
            $table->date('start_interest_calculation_date')->nullable();
            $table->date('next_interest_calculation_date')->nullable();
            $table->date('last_interest_calculation_date')->nullable();
            $table->date('last_interest_posting_date')->nullable();
            $table->decimal('calculated_interest', 65, 6)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('savings');
    }
};
