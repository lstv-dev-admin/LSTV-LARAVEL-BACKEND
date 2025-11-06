<?php

namespace App\Models\Masterfile\Recruitment;

use Illuminate\Database\Eloquent\Model;

class MfJobVacancyStatus extends Model
{
    protected $table = 'mf_job_vacancy_statuses';
    protected $primaryKey = 'record_id';

    protected $fillable = ['job_vacancy_status_id', 'job_vacancy_status_desc'];

    protected static $masterfileCode = 'JST';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_job_vacancy_statuses';
    protected static $idColumn = 'job_vacancy_status_id';
}
