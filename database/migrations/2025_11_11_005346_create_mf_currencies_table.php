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
        Schema::create('mf_currencies', function (Blueprint $table) {
            $table->id('record_id');
            $table->string('currency_id', 20)->unique();
            $table->string('currency_desc', 50)->unique();
            $table->decimal('currency_rate', 18, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mf_currencies');
    }
};
