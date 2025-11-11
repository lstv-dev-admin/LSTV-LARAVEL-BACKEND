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
        Schema::create('mf_positions', function (Blueprint $table) {
            $table->id('record_id');
            $table->string('position_id', 20)->unique()->comment('Position ID');
            $table->string('position_desc', 50)->unique()->comment('Position');
            $table->string('position_type_id', 20)->comment('Position Type');
            $table->timestamps();

            $table->foreign('position_type_id')->references('position_type_id')->on('mf_position_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mf_positions');
    }
};
