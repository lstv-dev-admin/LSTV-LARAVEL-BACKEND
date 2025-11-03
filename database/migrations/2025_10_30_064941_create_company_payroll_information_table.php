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
        Schema::create('company_payroll_information', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('employers_name')->nullable();
            $table->string('employer_code')->nullable();
            $table->string('sss_number')->nullable();
            $table->string('locator')->nullable();
            $table->string('sss_employer_type')->nullable();
            $table->string('phic_employer_number')->nullable();
            $table->string('phic_employer_type')->nullable();
            $table->string('type_of_report')->nullable();
            $table->string('pagibig_infomration')->nullable();
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
        Schema::dropIfExists('company_payroll_information');
    }
};
