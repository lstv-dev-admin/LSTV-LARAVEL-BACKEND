<?php

namespace App\Models\Employee201\Setup;

use Illuminate\Database\Eloquent\Model;

class SetupOnboardingCategory extends Model
{
    protected $table = "setup_onboarding_categories";
    protected $primaryKey = "record_id";
    
    protected $fillable = [
        'onboarding_category_id',
        'onboarding_category_desc',
    ];

    protected static $masterfileCode = 'ONC';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'setup_onboarding_categories';
    protected static $idColumn = 'onboarding_category_id';

    public function onboardingCategoryTasks()
    {
        return $this->hasMany(SetupOnboardingCategoryTask::class, 'onboarding_category_id', 'onboarding_category_id');
    }
}
