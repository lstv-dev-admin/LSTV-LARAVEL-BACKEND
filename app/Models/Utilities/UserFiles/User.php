<?php

namespace App\Models\Utilities\UserFiles;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['username', 'user_type_id', 'first_name', 'middle_name', 'last_name', 'email', 'status_id'];

    public function userType()
    {
        return $this->belongsTo(UserType::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
