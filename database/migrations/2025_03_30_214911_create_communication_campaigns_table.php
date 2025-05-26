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
        Schema::create('communication_campaigns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->unsignedBigInteger('sms_gateway_id')->nullable();
            $table->unsignedBigInteger('communication_campaign_business_rule_id')->nullable();
            $table->unsignedBigInteger('communication_campaign_attachment_type_id')->nullable();
            $table->unsignedBigInteger('branch_id')->nullable();
            $table->unsignedBigInteger('loan_officer_id')->nullable();
            $table->unsignedBigInteger('loan_product_id')->nullable();
            $table->text('subject')->nullable();
            $table->text('name')->nullable();
            $table->enum('campaign_type', ['sms', 'email'])->default('email');
            $table->enum('trigger_type', ['direct', 'schedule', 'triggered'])->default('direct');
            $table->date('scheduled_date')->nullable();
            $table->string('scheduled_time')->nullable();
            $table->integer('schedule_frequency')->nullable();
            $table->enum('schedule_frequency_type', ['days', 'weeks', 'months', 'years'])->default('days');
            $table->date('scheduled_next_run_date')->nullable();
            $table->date('scheduled_last_run_date')->nullable();
            $table->integer('from_x')->nullable();
            $table->integer('to_y')->nullable();
            $table->integer('cycle_x')->nullable();
            $table->integer('cycle_y')->nullable();
            $table->integer('overdue_x')->nullable();
            $table->integer('overdue_y')->nullable();
            $table->tinyInteger('active')->default(0);
            $table->enum('status', ['pending', 'active', 'inactive', 'closed', 'done'])->default('pending');
            $table->text('description')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communication_campaigns');
    }
};
