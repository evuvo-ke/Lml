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
        Schema::create('assets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->unsignedBigInteger('asset_type_id')->nullable();
            $table->unsignedBigInteger('branch_id')->nullable();
            $table->string('name')->nullable();
            $table->date('purchase_date')->nullable();
            $table->decimal('purchase_price', 65)->nullable();
            $table->decimal('replacement_value', 65)->nullable();
            $table->decimal('value', 65)->nullable();
            $table->integer('life_span')->nullable();
            $table->decimal('salvage_value', 65)->nullable();
            $table->text('serial_number')->nullable();
            $table->string('bought_from')->nullable();
            $table->string('purchase_year')->nullable();
            $table->text('notes')->nullable();
            $table->enum('status', ['active', 'inactive', 'sold', 'damaged', 'written_off'])->nullable();
            $table->tinyInteger('active')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
