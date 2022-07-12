<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;

    protected $table = 'profile';

    protected $fillable = [
        'avatar','first_name', 'last_name', 'email', 'age', 'company_name', 'phone', 'website', 'country', 'freelance'
    ];
}
