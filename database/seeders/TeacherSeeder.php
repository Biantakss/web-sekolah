<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\teacher;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        teacher::create([
            'name' => 'Centong Masak',
            'NIP' => 'TCH001',
            'subject' => 'Matematika',
            'email' => 'centongmasak@gmail.com',
            'gender' => 'L',
            'phone_number' => '08123456789',
            'is_admin' => 1,
            'password' => Hash::make('123456'),
        ]);
    }
}
