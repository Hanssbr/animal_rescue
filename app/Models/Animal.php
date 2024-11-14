<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'user_id',
        'image',
        'name',
        'species',
        'age',
        'status'
    ];
}
