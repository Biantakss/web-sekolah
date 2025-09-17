<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_DashboardController extends Controller
{
    public function index()
    {
        if (!auth('teacher')->check() || !auth('teacher')->user()->is_admin) {
            return redirect()->route('teacher.login');
        }
        $totalStudents = \App\Models\Student::count();
        return view('Admin_Dashboard.admin_dashboard', [
            'title' => 'Admin Dashboard',
            'totalStudents' => $totalStudents,
        ]);
    }
}
