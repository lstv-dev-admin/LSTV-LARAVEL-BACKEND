<?php

namespace App\Models\Masterfile\GeneralSetup;

use App\Models\Masterfile\Employees\Position;
use Illuminate\Database\Eloquent\Model;

class PositionType extends Model
{
    protected $fillable = ['name'];

    public function positions()
    {
        return $this->hasMany(Position::class);
    }
}
