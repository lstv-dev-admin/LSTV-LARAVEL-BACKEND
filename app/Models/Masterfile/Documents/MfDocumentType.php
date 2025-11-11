<?php

namespace App\Models\Masterfile\Documents;

use Illuminate\Database\Eloquent\Model;

class MfDocumentType extends Model
{
    protected $table = 'mf_document_types';
    protected $primaryKey = 'record_id';

    protected $fillable = ['document_type_id', 'document_type_desc'];

    protected static $masterfileCode = 'DCT';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'mf_document_types';
    protected static $idColumn = 'document_type_id';
}
