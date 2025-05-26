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
        Schema::create('branches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('created_by_id')->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('manager_id')->nullable();
            $table->string('name');
            $table->date('open_date')->nullable();
            $table->text('notes')->nullable();
            $table->tinyInteger('active')->default(1);
            $table->tinyInteger('is_system')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
