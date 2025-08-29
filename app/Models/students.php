<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'name',
        'NIS',
        'NISN',
        'class',
        'extracurricular',
        'email',
        'birth_date',
        'address',
        'phone_number',
        'parents_name',
    ];
}
