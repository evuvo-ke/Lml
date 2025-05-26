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
        Schema::create('asset_maintenance', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->unsignedBigInteger('asset_maintenance_type_id')->nullable();
            $table->unsignedBigInteger('asset_id')->nullable();
            $table->text('performed_by')->nullable();
            $table->date('date')->nullable();
            $table->decimal('amount', 65)->nullable();
            $table->decimal('mileage', 65)->nullable();
            $table->tinyInteger('record_expense')->default(0);
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asset_maintenance');
    }
};
