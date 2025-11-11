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
        Schema::create('mf_payroll_groups', function (Blueprint $table) {
            $table->id('record_id');
            $table->string('payroll_group_id', 20)->unique();
            $table->string('payroll_group_desc', 50)->unique();
            $table->string('payroll_cycle', 250);
            $table->string('bank_id', 20);
            $table->string('currency_id', 20);
            $table->timestamps();

            $table->foreign('bank_id')->references('bank_id')->on('mf_banks');
            $table->foreign('currency_id')->references('currency_id')->on('mf_currencies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mf_payroll_groups');
    }
};
