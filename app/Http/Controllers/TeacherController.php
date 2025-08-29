<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class TeacherController extends Controller
{
     public function index()
    {
        $data = Teacher::select('id', 'name', 'NIP', 'subject', 'email',)
        ->orderBy('id', 'DESC')
        ->get();
        return view('layout-dashboard/teachers/teacher', [
            'title' => 'Teachers List',
        ], compact('data'));
    }
}