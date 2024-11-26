<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    protected $fillable = [
        'user_id',
        'animal_id',
        'name',
        'email',
        'telp',
        'address',
        'image',
        'description',
        'status',
    ];

    public function animal() {
        return $this->hasOne(animal::class, 'id', 'animal_id');
    }

}
