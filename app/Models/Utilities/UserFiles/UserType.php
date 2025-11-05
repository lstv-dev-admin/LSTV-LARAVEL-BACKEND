<?php

namespace App\Models\Utilities\UserFiles;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $fillable = ['name'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
