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
        Schema::create('custom_fields', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->string('category')->nullable();
            $table->string('type');
            $table->text('name')->nullable();
            $table->text('label')->nullable();
            $table->text('options')->nullable();
            $table->text('class')->nullable();
            $table->text('db_columns')->nullable();
            $table->text('rules')->nullable();
            $table->text('default_values')->nullable();
            $table->tinyInteger('required')->default(0);
            $table->tinyInteger('active')->default(1);
            $table->timestamps();
            $table->tinyInteger('include_in_report')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_fields');
    }
};
