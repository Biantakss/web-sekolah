<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Photo;

class Student extends Authenticatable
{
            public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    protected $table = 'students';

    protected $fillable = [
        'name',
        'NIS',
        'NISN',
        'class',
        'gender',
        'extracurricular',
        'email',
        'password',
        'birth_date',
        'address',
        'phone_number',
        'parents_name',
        'images',
    ];
}
