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
        Schema::create('setup_onboarding_category_tasks', function (Blueprint $table) {
            $table->id('record_id');
            $table->string('onboarding_task_id', 50)->unique()->comment("Task ID");
            $table->string('onboarding_category_id', 50)->nullable()->comment("Onboarding Category ID");
            $table->string('before_or_after', 50)->nullable()->comment("Before or After");
            $table->string('date_filter', 50)->nullable()->comment("Date Filter");
            $table->integer('date_due_type')->nullable()->comment("Due Date Type");
            $table->integer('is_generic')->nullable()->comment("Generic Indication");
            $table->integer('is_pagibig')->nullable()->comment("Pag-ibig Indication");
            $table->integer('is_philhealth')->nullable()->comment("Philhealth Indication");
            $table->integer('is_required')->nullable()->comment("Required Indication");
            $table->integer('is_required_attach')->nullable()->comment("Required Attachment Indication");
            $table->integer('is_required_template')->nullable()->comment("Required Template Indication");
            $table->integer('is_sss')->nullable()->comment("SSS Indication");
            $table->integer('is_tin')->nullable()->comment("Tin Indication");
            $table->integer('range_interval')->nullable()->comment("Range Interval");
            $table->string('task_description', 150)->nullable()->comment("Task Descripton");
            $table->timestamps();

            $table->foreign('onboarding_category_id')->references('onboarding_category_id')->on('setup_onboarding_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setup_onboarding_category_tasks');
    }
};
