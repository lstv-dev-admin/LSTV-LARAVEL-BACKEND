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
        Schema::create('mf_civil_service_eligibilities', function (Blueprint $table) {
            $table->id('record_id');
            $table->string('civil_service_eligibility_id', 20)->unique();
            $table->string('civil_service_eligibility_desc', 50)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mf_civil_service_eligibilities');
    }
};
