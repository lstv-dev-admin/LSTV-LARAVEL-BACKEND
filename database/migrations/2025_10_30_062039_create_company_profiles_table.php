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
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('address_line_1');
            $table->string('address_line_2')->nullable();
            $table->string('email');
            $table->string('contact_person')->nullable();
            $table->string('phone')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('mobile_number');
            $table->string('position')->nullable();
            $table->string('fax')->nullable();
            $table->boolean('is_online_application_public')->default(false);
            $table->string('average_processing_time')->nullable();
            $table->string('website')->nullable();
            $table->string('working_hours')->nullable();
            $table->string('dress_code')->nullable();
            $table->string('industry')->nullable();
            $table->string('company_size')->nullable();
            $table->text('benefits')->nullable();
            $table->string('spoken_language')->nullable();
            $table->text('company_overview')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_profiles');
    }
};
