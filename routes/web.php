// Explicit route for editing student data (manage-student modal)

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController; 
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\AcademyController;
use App\Http\Controllers\Admin_DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\Auth\Login_StudentController;
use App\Http\Controllers\Auth\RegisterTeacherController;
use App\Http\Controllers\ManageStudentController;

Route::get('/app', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/facility', [FacilityController::class, 'index'])->name('facility');
Route::get('/academy', [AcademyController::class, 'index'])->name('academy');
Route::get('/achievement', [AchievementController::class, 'index'])->name('achievement');
Route::get('/admin-dashboard', [Admin_DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/student-profile', [StudentController::class, 'index'])->name('student.profile')->middleware('auth:student');
Route::get('/admin/students', [App\Http\Controllers\ManageStudentController::class, 'index'])->name('admin.students.index');


Route::get('/manage-student', [App\Http\Controllers\ManageStudentController::class, 'index'])->middleware('auth:teacher')->name('manage.student');
Route::delete('/manage-student/{id}', [App\Http\Controllers\ManageStudentController::class, 'destroy'])->name('manage.student.destroy');
Route::post('/manage-student/edit', [App\Http\Controllers\StudentController::class, 'editDataUser'])->name('manage.student.edit');

// Route pendaftaran siswa publik
Route::get('/register-student', [App\Http\Controllers\ManageStudentController::class, 'create'])->name('student.create');
Route::post('/register-student', [App\Http\Controllers\ManageStudentController::class, 'store'])->name('student.store');
Route::post('/student/edit', [App\Http\Controllers\StudentController::class, 'editDataUser'])->name('student.edit');

// Teacher login
Route::get('/login-teacher-redirect', function() {return redirect()->route('teacher.login');})->name('login.teacher');
Route::get('/login-teacher', [LoginController::class, 'showTeacherLoginForm'])->name('teacher.login')->middleware('guest');
Route::post('/login-teacher', [LoginController::class, 'teacherLogin'])->name('teacher.login.submit');
Route::post('/logout-teacher', [LoginController::class, 'logout'])->name('teacher.logout');

// Student login
Route::get('/login-student', [Login_StudentController::class, 'showStudentLoginForm'])->name('student.login')->middleware('guest');
Route::post('/login-student', [Login_StudentController::class, 'studentLogin'])->name('student.login.submit');
Route::post('/logout-student', [Login_StudentController::class, 'logout'])->name('student.logout');
Route::get('/login', function() {return redirect()->route('student.login');})->name('login');

Route::get('/register-teacher', [RegisterTeacherController::class, 'showRegistrationForm'])->name('teacher.register');
Route::post('/register-teacher', [RegisterTeacherController::class, 'register'])->name('teacher.register.submit');

// Upload foto student
Route::post('/student/{id}/upload-foto', [App\Http\Controllers\StudentController::class, 'uploadFoto'])->name('student.uploadFoto');
