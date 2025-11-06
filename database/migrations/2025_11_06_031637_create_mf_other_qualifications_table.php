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
        Schema::create('mf_other_qualifications', function (Blueprint $table) {
            $table->id('record_id');
            $table->string('other_qualification_id', 20)->unique();
            $table->string('other_qualification_desc', 50)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mf_other_qualifications');
    }
};
