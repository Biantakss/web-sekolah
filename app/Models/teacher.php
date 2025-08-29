<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    use HasFactory;

    protected $table = 'teachers';

    protected $fillable = [
        'name',
        'NIP',
        'subject',
        'email',
        'gender',
        'phone_number',
        'is_admin',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

      public function isAdmin()
    {
        return $this->is_admin === 1;
    }

    
}
