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
            $table->string('region_id', 20);
            $table->string('province_id', 20);
            $table->string('city_id', 20);
            $table->timestamps();

            $table->foreign('region_id')->references('region_id')->on('mf_regions');
            $table->foreign('province_id')->references('province_id')->on('mf_provinces');
            $table->foreign('city_id')->references('city_id')->on('mf_cities');
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
