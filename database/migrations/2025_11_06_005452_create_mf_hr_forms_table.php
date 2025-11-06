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
        Schema::create('mf_hr_forms', function (Blueprint $table) {
            $table->id('record_id');
            $table->string('hr_form_id')->unique();
            $table->string('hr_form_desc')->unique();
            $table->string('hr_form_file_name');
            $table->string('hr_form_file_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mf_hr_forms');
    }
};
