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
        Schema::table('savings_charges', function (Blueprint $table) {
            $table->foreign(['created_by_id'])->references(['id'])->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['currency_id'])->references(['id'])->on('currencies')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['savings_charge_option_id'])->references(['id'])->on('savings_charge_options')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['savings_charge_type_id'])->references(['id'])->on('savings_charge_types')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('savings_charges', function (Blueprint $table) {
            $table->dropForeign('savings_charges_created_by_id_foreign');
            $table->dropForeign('savings_charges_currency_id_foreign');
            $table->dropForeign('savings_charges_savings_charge_option_id_foreign');
            $table->dropForeign('savings_charges_savings_charge_type_id_foreign');
        });
    }
};
