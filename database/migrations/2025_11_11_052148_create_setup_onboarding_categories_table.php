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
        Schema::create('setup_onboarding_categories', function (Blueprint $table) {
            $table->id('record_id');
            $table->string('onboarding_category_id', 50)->unique()->comment("Onboarding Category ID");
            $table->string('onboarding_category_desc', 50)->nullable()->comment("Onboarding Category Description");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setup_onboarding_categories');
    }
};
