<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class StudentSeeder extends Seeder
{
	public function run()
	{
		DB::table('students')->insert([
			[
				'name' => 'Ahmad Fauzi',
				'NIS' => '2025001',
				'NISN' => '1234567890',
				'class' => 'XII-A',
				'gender' => 'Laki-laki',
				'extracurricular' => 'Basket',
				   'email' => 'ahmad.fauzi@example.com',
				   'password' => Hash::make('password123'),
				'birth_date' => '2007-01-15',
				'phone_number' => '081234567890',
				'address' => 'Jl. Merdeka No. 1',
				'parents_name' => 'Bapak Fauzan',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'name' => 'Siti Aminah',
				'NIS' => '2025002',
				'NISN' => '1234567891',
				'class' => 'XII-C',
				'gender' => 'Perempuan',
				'extracurricular' => 'Paduan Suara',
				   'email' => 'siti.aminah@example.com',
				   'password' => Hash::make('password123'),
				'birth_date' => '2007-03-22',
				'phone_number' => '081234567891',
				'address' => 'Jl. Sudirman No. 2',
				'parents_name' => 'Ibu Aminah',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
			[
				'name' => 'Budi Santoso',
				'NIS' => '2025003',
				'NISN' => '1234567892',
				'class' => 'XI-A',
				'gender' => 'Laki-laki',
				'extracurricular' => 'Futsal',
				   'email' => 'budi.santoso@example.com',
				   'password' => Hash::make('password123'),
				'birth_date' => '2007-05-10',
				'phone_number' => '081234567892',
				'address' => 'Jl. Diponegoro No. 3',
				'parents_name' => 'Bapak Santoso',
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			],
		]);
	}
}
