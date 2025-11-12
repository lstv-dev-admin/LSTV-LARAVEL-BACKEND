<?php

namespace App\Models\Employee201\Setup;

use Illuminate\Database\Eloquent\Model;

class SetupOnboardingCategoryTask extends Model
{
    protected $table = "setup_onboarding_category_tasks";
    protected $primaryKey = "record_id";

    protected $fillable = [
        'onboarding_task_id',
        'onboarding_category_id',
        'before_or_after',
        'date_filter',
        'date_due_type',
        'is_generic',
        'is_pagibig',
        'is_philhealth',
        'is_required',
        'is_required_attach',
        'is_required_template',
        'is_sss',
        'is_tin',
        'range_interval',
        'task_description'
    ];

    protected static $masterfileCode = 'ONT';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'setup_onboarding_category_tasks';
    protected static $idColumn = 'onboaring_task_id';

    public function onboardingCategory()
    {
        return $this->belongsTo(SetupOnboardingCategory::class, 'onboarding_category_id', 'onboarding_category_id');
    }
}
