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
        Schema::create('mf_leaves', function (Blueprint $table) {
            $table->id('record_id');
            $table->string('leave_id', 20)->unique()->comment("Leave ID");
            $table->string('leave_desc', 50)->unique()->comment("Leave");
            $table->string('tax_class', 10)->comment("Tax Class");
            $table->integer('is_active')->default(1)->comment("Active Indicator");
            $table->integer('is_included_in_13th_month')->default(0)->comment("Include in 13th Month Computation Setup");
            $table->integer('is_included_in_ecola')->default(0)->comment("Include in ECOLA Setup");
            $table->integer('is_included_in_philhealth')->default(0)->comment("Include in PhilHealth Computation Setup");
            $table->integer('is_included_in_pagibig')->default(0)->comment("Include in Pag-Ibig Computation Setup");
            $table->integer('is_included_in_sss')->default(0)->comment("Include in SSS Computation Setup");
            $table->integer('is_included_in_gsis')->default(0)->comment("Include in GSIS Computation Setup");
            $table->integer('is_included_in_tax')->default(0)->comment("Include in Tax Computation Setup");
            $table->integer('is_sick_leave')->default(0)->comment("Is Sick Leave");
            $table->integer('is_without_pay')->default(0)->comment("Without Pay");
            $table->integer('is_extra_day_off')->default(0)->comment("Is Extra Day Off");
            $table->decimal('deminimis_limit', 18, 5)->default(0)->comment("DM Limit");
            $table->string('deminimis_period', 50)->nullable()->comment("DM Period");
            $table->string('bir_2316_setup', 20)->nullable()->comment("2316 Setup");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mf_leaves');
    }
};
