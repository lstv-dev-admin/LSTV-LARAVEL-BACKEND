<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mf_document_types', function (Blueprint $table) {
            $table->id('record_id');
            $table->string('document_type_id', 20)->unique();
            $table->string('document_type_desc', 50)->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mf_document_types');
    }
};
