<?php

namespace App\Models\Masterfile\CompanyDetails;

use Illuminate\Database\Eloquent\Model;

class CompanyForm extends Model
{
    protected $fillable = [
        'name',
        'file_name',
        'file_path',
    ];
}
