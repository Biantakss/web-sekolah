<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class ManageStudentController extends Controller
{
     

public function index()
{
    // hanya ambil data siswa yang di-seed
    $students = Student::all();

    return view('admin.manage_students.index', compact('students'));
}

    public function create()
    {
        return view('admin.manage_students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'NIS' => 'required|string|max:50',
            'NISN' => 'required|string|max:50|unique:students,NISN',
            'class' => 'required|string|max:50',
            'email' => 'required|email|max:255|unique:students,email',
            'gender' => 'required|string',
            'extracurricular' => 'nullable|string',
            'birth_date' => 'nullable|date',
            'phone_number' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'parents_name' => 'nullable|string|max:255',
            'password' => 'required|string|min:6',
        ]);

        $validated['password'] = bcrypt($validated['password']);
        $student = Student::create($validated);

        // Kondisi: jika admin (auth:teacher) sedang login, redirect ke manage student
        if (Auth::guard('teacher')->check()) {
            return redirect()->route('manage.student')->with('success', 'Siswa berhasil ditambahkan oleh admin!');
        }
        // Jika bukan admin, redirect ke login siswa
        return redirect()->route('student.login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.manage_students.show', compact('student'));
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('admin.students.index')->with('success', 'Student deleted successfully.');
    }
}
