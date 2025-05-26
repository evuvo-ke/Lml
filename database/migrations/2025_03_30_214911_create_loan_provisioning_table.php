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
        Schema::create('loan_provisioning', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('lower_limit')->nullable();
            $table->integer('upper_limit')->nullable();
            $table->double('percentage', 65, 2)->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_provisioning');
    }
};
