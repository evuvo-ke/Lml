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
        Schema::create('asset_notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('created_by_id')->nullable();
            $table->unsignedBigInteger('asset_id')->nullable();
            $table->text('attachment')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asset_notes');
    }
};
