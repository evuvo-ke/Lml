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
        Schema::create('savings_product_linked_charges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('savings_product_id');
            $table->unsignedBigInteger('savings_charge_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('savings_product_linked_charges');
    }
};
