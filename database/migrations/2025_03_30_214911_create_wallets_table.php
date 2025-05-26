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
        Schema::create('wallets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('currency_id');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->enum('client_type', ['client', 'group'])->nullable()->default('client');
            $table->unsignedBigInteger('client_id')->nullable()->index();
            $table->unsignedBigInteger('group_id')->nullable();
            $table->unsignedBigInteger('branch_id')->nullable()->index();
            $table->enum('status', ['pending', 'active', 'inactive', 'closed', 'suspended', 'rejected', 'approved'])->nullable()->default('pending');
            $table->decimal('balance', 65, 6)->nullable();
            $table->integer('decimals')->default(2);
            $table->text('description')->nullable();
            $table->date('submitted_on_date')->nullable();
            $table->unsignedBigInteger('submitted_by_user_id')->nullable();
            $table->date('approved_on_date')->nullable();
            $table->unsignedBigInteger('approved_by_user_id')->nullable();
            $table->text('approved_notes')->nullable();
            $table->date('rejected_on_date')->nullable();
            $table->unsignedBigInteger('rejected_by_user_id')->nullable();
            $table->text('rejected_notes')->nullable();
            $table->date('closed_on_date')->nullable();
            $table->unsignedBigInteger('closed_by_user_id')->nullable();
            $table->text('closed_notes')->nullable();
            $table->date('activated_on_date')->nullable();
            $table->unsignedBigInteger('activated_by_user_id')->nullable();
            $table->text('activated_notes')->nullable();
            $table->date('suspended_on_date')->nullable();
            $table->unsignedBigInteger('suspended_by_user_id')->nullable();
            $table->text('suspended_notes')->nullable();
            $table->date('inactive_on_date')->nullable();
            $table->unsignedBigInteger('inactive_by_user_id')->nullable();
            $table->text('inactive_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};
