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
        Schema::create('mf_evaluation_levels', function (Blueprint $table) {
            $table->id('record_id');
            $table->string('evaluation_level_id', 20)->unique();
            $table->string('evaluation_level_desc', 50)->unique();
            $table->string('level', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mf_evaluation_levels');
    }
};
