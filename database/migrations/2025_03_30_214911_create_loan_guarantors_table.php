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
        Schema::create('loan_guarantors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->unsignedBigInteger('branch_id')->nullable();
            $table->unsignedBigInteger('loan_id')->nullable()->index();
            $table->tinyInteger('is_client')->default(0);
            $table->unsignedBigInteger('client_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->enum('gender', ['male', 'female', 'other', 'unspecified'])->nullable()->default('unspecified');
            $table->enum('status', ['pending', 'active', 'inactive', 'deceased', 'unspecified', 'closed'])->default('pending');
            $table->enum('marital_status', ['married', 'single', 'divorced', 'widowed', 'unspecified', 'other'])->nullable()->default('unspecified');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('title_id')->nullable();
            $table->unsignedBigInteger('profession_id')->nullable();
            $table->unsignedBigInteger('client_relationship_id')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->date('dob')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('employer')->nullable();
            $table->string('photo')->nullable();
            $table->text('notes')->nullable();
            $table->date('created_date')->nullable();
            $table->date('joined_date')->nullable();
            $table->decimal('guaranteed_amount', 65, 6)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_guarantors');
    }
};
