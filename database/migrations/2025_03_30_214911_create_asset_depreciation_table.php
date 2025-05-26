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
        Schema::create('asset_depreciation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('asset_id')->nullable();
            $table->string('year')->nullable();
            $table->decimal('beginning_value', 65)->nullable();
            $table->decimal('depreciation_value', 65)->nullable();
            $table->decimal('rate', 65)->nullable();
            $table->decimal('cost', 65)->nullable();
            $table->decimal('accumulated', 65)->nullable();
            $table->decimal('ending_value', 65)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asset_depreciation');
    }
};
