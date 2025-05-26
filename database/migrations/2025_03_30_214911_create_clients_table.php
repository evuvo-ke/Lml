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
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->unsignedBigInteger('branch_id')->nullable();
            $table->unsignedBigInteger('loan_officer_id')->nullable();
            $table->string('reference')->nullable();
            $table->string('account_number')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->enum('gender', ['male', 'female', 'other', 'unspecified'])->nullable()->default('unspecified');
            $table->enum('status', ['pending', 'active', 'inactive', 'deceased', 'unspecified', 'closed'])->default('pending');
            $table->enum('marital_status', ['married', 'single', 'divorced', 'widowed', 'unspecified', 'other'])->nullable()->default('unspecified');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('title_id')->nullable();
            $table->unsignedBigInteger('profession_id')->nullable();
            $table->unsignedBigInteger('client_type_id')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('external_id')->nullable();
            $table->date('dob')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('employer')->nullable();
            $table->string('photo')->nullable();
            $table->text('notes')->nullable();
            $table->text('signature')->nullable();
            $table->date('created_date')->nullable();
            $table->date('joined_date')->nullable();
            $table->date('activation_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
