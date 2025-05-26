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
        Schema::create('sms_gateways', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('created_by_id')->nullable()->index('sms_gateways_created_by_id_foreign');
            $table->text('name')->nullable();
            $table->text('to_name')->nullable();
            $table->text('url')->nullable();
            $table->text('msg_name')->nullable();
            $table->tinyInteger('active')->default(0);
            $table->tinyInteger('is_current')->default(0);
            $table->tinyInteger('http_api')->default(1);
            $table->text('class_name')->nullable();
            $table->text('key_one')->nullable();
            $table->text('key_one_description')->nullable();
            $table->text('key_two')->nullable();
            $table->text('key_two_description')->nullable();
            $table->text('key_three')->nullable();
            $table->text('key_three_description')->nullable();
            $table->text('key_four')->nullable();
            $table->text('key_four_description')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sms_gateways');
    }
};
