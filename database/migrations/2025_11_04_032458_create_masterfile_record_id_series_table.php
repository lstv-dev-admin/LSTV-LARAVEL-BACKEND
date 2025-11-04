<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('masterfile_record_id_series', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('masterfile_code', 5)->unique();
            $table->string('next_series', 50)->nullable();
            $table->string('lock', 1)->default('N');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('masterfile_record_id_series');
    }
};
