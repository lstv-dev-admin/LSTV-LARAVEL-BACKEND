<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Model
{
    protected $fillable = [
        'username',
        'user_type_id',
        'first_name',
        'middle_name',
        'last_name',
        'email'
    ];

    public function userType(): BelongsTo
    {
        return $this->belongsTo(UserType::class);
    }
}
