@extends('layout-dashboard.app')

@section('title', 'Teacher Dashboard')


@section('content')

<div class="container py-5">
    <div class="row mb-4">
        <div class="col-md-8 mx-auto text-center">
            <h1 class="display-4 fw-bold mb-3 text-primary"><i class="bi bi-person-badge-fill"></i> Teacher Dashboard</h1>
            <p class="lead text-secondary">Welcome, teacher! Here you can manage your classes, students, and view important statistics.</p>
        </div>
    </div>
    <div class="row g-4 mb-5 justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-lg border-0">
                <div class="card-body text-center">
                    <h5 class="card-title"><i class="bi bi-people text-info fs-2"></i></h5>
                    <p class="card-text">Total Students</p>
                    <h2 class="fw-bold">{{ $totalStudents }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg border-0">
                <div class="card-body text-center">
                    <h5 class="card-title"><i class="bi bi-journal-bookmark text-success fs-2"></i></h5>
                    <p class="card-text">Subjects Taught</p>
                    <h2 class="fw-bold">5</h2>
                </div>
            </div>
        </div>
      
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-3"><i class="bi bi-list-task text-primary"></i> Quick Menu</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="manage-student" class="text-decoration-none text-dark"><i class="bi bi-person-lines-fill"></i> Manage Students</a></li>
                        <li class="list-group-item"><a href="{{ route('student.create') }}" class="text-decoration-none text-dark"><i class="bi bi-person-plus"></i> Add Student</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end mb-4">
    <form method="POST" action="{{ route('teacher.logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger"><i class="bi bi-box-arrow-right"></i> Logout</button>
    </form>
</div>
</div>
<style>
    .card:hover {
        box-shadow: 0 8px 32px rgba(33,150,243,.15);
        transform: scale(1.03);
    }
</style>
@endsection