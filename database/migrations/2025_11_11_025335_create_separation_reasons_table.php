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
        Schema::create('separation_reasons', function (Blueprint $table) {
            $table->id('record_id');
            $table->string('separation_reason_id', 20)->unique()->comment('Separation Reason ID');
            $table->string('separation_reason_desc', 50)->unique()->comment('Separation Reason');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('separation_reasons');
    }
};
