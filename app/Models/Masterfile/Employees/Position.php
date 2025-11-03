<?php

namespace App\Models\Masterfile\Employees;

use App\Models\Masterfile\GeneralSetup\PositionType;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = ['name', 'position_type_id'];

    public function positionType()
    {
        return $this->belongsTo(PositionType::class);
    }
}
