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
        Schema::create('mf_region_province_cities', function (Blueprint $table) {
            $table->id('record_id');
            $table->foreignId('region_id')->constrained('mf_regions', 'record_id');
            $table->foreignId('province_id')->constrained('mf_provinces', 'record_id');
            $table->foreignId('city_id')->constrained('mf_cities', 'record_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mf_region_province_cities');
    }
};
