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
        Schema::create('mf_other_earnings', function (Blueprint $table) {
            $table->id('record_id');
            $table->string('other_earning_id', 20)->unique()->comment('Other Earnings ID');
            $table->string('other_earning_desc', 50)->nullable()->index()->comment('Other Earnings');
            $table->decimal('deminimis_limit', 18, 2)->nullable()->comment('DM Limit');
            $table->string('deminimis_period', 50)->nullable()->comment('DM Period');
            $table->string('tax_class', 3)->nullable()->comment('Tax Class');
            $table->string('bir_2316_setup', 20)->nullable()->comment('2316 Setup');
            $table->integer('is_active')->default(1)->comment('Active Indicator');
            $table->integer('is_included_in_13th_month')->nullable()->comment('Include in 13th Month Computation Setup');
            $table->integer('is_included_in_tax')->nullable()->comment('Include in Tax Month Computation Setup');
            $table->integer('is_included_in_philhealth')->nullable()->comment('Include in PhilHealth Computation Setup');
            $table->integer('is_included_in_pagibig')->nullable()->comment('Include in Pag-Ibig Computation Setup');
            $table->integer('is_included_in_sss')->nullable()->comment('Include in SSS Computation Setup');
            $table->integer('is_included_in_gsis')->nullable()->comment('Include in GSIS Computation Setup');
            $table->integer('is_project_base')->nullable()->comment('Project Base Indicator');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mf_other_earnings');
    }
};
