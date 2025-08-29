<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'file_path',
        'original_name',
        'mime_type',
        'size',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
