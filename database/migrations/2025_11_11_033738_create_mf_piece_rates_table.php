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
        Schema::create('mf_piece_rates', function (Blueprint $table) {
            $table->bigIncrements('record_id');
            $table->string('piece_rate_id', 20)->unique()->comment("Piece Rate ID");
            $table->string('piece_rate_desc', 50)->unique()->comment("Piece Rate");
            $table->string('tax_class', 3)->comment("Tax Class");
            $table->decimal('amount', 18, 5)->default(0.00)->comment("Amount");
            $table->integer('is_active')->default(1)->comment("Active Indication");
            $table->integer('is_included_in_13th_month')->default(0)->comment("Include in 13th Month Computation");
            $table->integer('is_included_in_philhealth')->default(0)->comment("Include in PhilHealth Computation");
            $table->integer('is_included_in_pagibig')->default(0)->comment("Include in Pag-IBIG Computation");
            $table->integer('is_included_in_sss')->default(0)->comment("Include in SSS Computation");
            $table->integer('is_included_in_gsis')->default(0)->comment("Include in GSIS Computation");
            $table->integer('is_included_in_tax')->default(0)->comment("Include in Tax Computation");
            $table->string('bir_2316_setup', 20)->nullable()->comment("2316 Setup");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mf_piece_rates');
    }
};
