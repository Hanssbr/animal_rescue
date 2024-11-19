<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'rescuer',
        'image',
        'name',
        'gender',
        'age',
        'description',
    ];

    protected static function booted()
    {
        static::creating(function ($adoption) {
            if (!$adoption->uuid) {
                $adoption->uuid = (string) Str::uuid();
            }
        });
    }

}
