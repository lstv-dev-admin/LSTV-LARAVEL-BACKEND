<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterfileRecordIdSeries extends Model
{
    protected $fillable = ['masterfile_code', 'next_series', 'lock'];
}
