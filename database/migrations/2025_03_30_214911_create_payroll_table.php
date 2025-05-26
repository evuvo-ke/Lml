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
        Schema::create('payroll', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('branch_id')->nullable();
            $table->unsignedBigInteger('currency_id')->nullable();
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->unsignedBigInteger('payroll_template_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('employee_name')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('description')->nullable();
            $table->text('comments')->nullable();
            $table->decimal('work_duration', 65)->default(0);
            $table->string('duration_unit')->nullable();
            $table->decimal('amount_per_duration', 65)->default(0);
            $table->decimal('total_duration_amount', 65)->default(0);
            $table->decimal('gross_amount', 65)->default(0);
            $table->decimal('total_allowances', 65)->default(0);
            $table->decimal('total_deductions', 65)->default(0);
            $table->date('date')->nullable();
            $table->string('year')->nullable();
            $table->string('month')->nullable();
            $table->tinyInteger('recurring')->nullable()->default(0);
            $table->string('recur_frequency')->nullable()->default('31');
            $table->date('recur_start_date')->nullable();
            $table->date('recur_end_date')->nullable();
            $table->date('recur_next_date')->nullable();
            $table->enum('recur_type', ['day', 'week', 'month', 'year'])->nullable()->default('month');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payroll');
    }
};
