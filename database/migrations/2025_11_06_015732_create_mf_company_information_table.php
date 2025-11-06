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
        Schema::create('mf_company_information', function (Blueprint $table) {
            $table->id('record_id');
            $table->string('address_line_1');
            $table->string('address_line_2')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('email');
            $table->string('contact_person')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile_number');
            $table->string('position')->nullable();
            $table->string('fax')->nullable();
            $table->boolean('is_company_snapshot_public')->default(false);
            $table->string('average_processing_time')->nullable();
            $table->string('website')->nullable();
            $table->string('working_hours')->nullable();
            $table->string('dress_code')->nullable();
            $table->string('industry')->nullable();
            $table->string('company_size')->nullable();
            $table->text('benefits')->nullable();
            $table->string('spoken_language')->nullable();
            $table->text('company_overview')->nullable();
            $table->boolean('is_company_overview_public')->default(false);
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('employer_name')->nullable();
            $table->string('employer_code')->nullable();
            $table->string('sss_number')->nullable();
            $table->string('locator')->nullable();
            $table->string('sss_employer_type')->nullable();
            $table->string('phic_employer_number')->nullable();
            $table->string('phic_employer_type')->nullable();
            $table->string('type_of_report')->nullable();
            $table->string('hdmf_employer_number')->nullable();
            $table->string('tin')->nullable();
            $table->string('rdo_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mf_company_information');
    }
};
