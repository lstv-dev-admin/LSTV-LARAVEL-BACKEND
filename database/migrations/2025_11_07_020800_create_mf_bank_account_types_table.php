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
        Schema::create('mf_bank_account_types', function (Blueprint $table) {
            $table->id('record_id');
            $table->string('bank_account_type_id', 20)->unique();
            $table->string('bank_account_type_desc', 50)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mf_bank_account_types');
    }
};

