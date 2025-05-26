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
        Schema::create('communication_campaign_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->bigInteger('sms_gateway_id')->nullable();
            $table->bigInteger('communication_campaign_id')->nullable();
            $table->enum('campaign_type', ['sms', 'email']);
            $table->text('description')->nullable();
            $table->text('send_to')->nullable();
            $table->text('campaign_name')->nullable();
            $table->enum('status', ['pending', 'sent', 'delivered', 'failed'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communication_campaign_logs');
    }
};
