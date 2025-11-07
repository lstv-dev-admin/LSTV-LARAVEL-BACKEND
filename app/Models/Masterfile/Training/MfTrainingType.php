<?php

namespace App\Models\Masterfile\Training;

use Illuminate\Database\Eloquent\Model;

class MfTrainingType extends Model
{
    protected $table = 'mf_training_types';
    protected $primaryKey = 'record_id';

    protected $fillable = ['training_type_id', 'training_type_desc'];

    protected static $masterfileCode = 'TRT';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_training_types';
    protected static $idColumn = 'training_type_id';
}
