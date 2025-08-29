<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class Login_StudentController extends Controller
{
    public function showStudentLoginForm()
    {
        return view('Auth.student_login');
    }

    public function studentLogin(Request $request)
    {
        $credentials = $request->validate([
            'email'     => ['required', 'email'],
            'password'  => ['required'],
        ]);

        // Cek login pada tabel students
        if (Auth::guard('student')->attempt($credentials)) {
            $request->session()->regenerate();
            $student = Auth::guard('student')->user();
            if ($student) {
                return redirect()->route('student.profile');
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::guard('student')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

    return redirect()->route('student.login');
    }
}
