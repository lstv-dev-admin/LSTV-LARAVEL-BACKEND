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
        Schema::create('mf_loans', function (Blueprint $table) {
            $table->id('record_id');
            $table->string('loan_id', 20)->unique();
            $table->string('loan_desc', 50)->nullable()->unique()->comment('Loan');
            $table->integer('is_active')->default(1)->comment("Active Indicator");
            $table->integer('is_government_loan')->nullable()->comment("Government Loan Indicator");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mf_loans');
    }
};
