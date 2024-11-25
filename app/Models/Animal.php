<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Animal extends Model
{
    protected $fillable = [
        'user_id',
        'uuid',
        'image',
        'name',
        'gender',
        'species',
        'age',
        'status',
        'description'
    ];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = (string) Str::uuid(); // Mengisi UUID secara otomatis
            }
        });
    }


}
