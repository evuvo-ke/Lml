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
        Schema::create('shares', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->unsignedBigInteger('currency_id');
            $table->unsignedBigInteger('share_officer_id')->nullable();
            $table->unsignedBigInteger('share_product_id')->nullable();
            $table->unsignedBigInteger('savings_id')->nullable();
            $table->enum('client_type', ['client', 'group'])->nullable()->default('client');
            $table->unsignedBigInteger('client_id')->nullable()->index();
            $table->unsignedBigInteger('group_id')->nullable();
            $table->unsignedBigInteger('branch_id')->nullable()->index();
            $table->string('account_number')->nullable();
            $table->string('external_id')->nullable();
            $table->integer('decimals')->nullable();
            $table->integer('total_shares')->nullable();
            $table->decimal('nominal_price', 65, 6)->nullable();
            $table->integer('minimum_active_period')->nullable();
            $table->enum('minimum_active_period_type', ['days', 'weeks', 'months', 'years'])->nullable()->default('days');
            $table->integer('lockin_period')->default(0);
            $table->enum('lockin_type', ['days', 'weeks', 'months', 'years'])->default('days');
            $table->tinyInteger('allow_dividends_for_inactive_clients')->default(0);
            $table->date('submitted_on_date')->nullable();
            $table->date('application_date')->nullable();
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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shares');
    }
};
