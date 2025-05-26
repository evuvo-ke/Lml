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
        Schema::create('loan_collateral', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->unsignedBigInteger('loan_id')->index();
            $table->unsignedBigInteger('loan_collateral_type_id');
            $table->text('description')->nullable();
            $table->decimal('value', 65, 6)->nullable();
            $table->text('link')->nullable();
            $table->enum('status', ['active', 'repossessed', 'sold', 'closed'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_collateral');
    }
};
