@extends('layout-dashboard.app')

@section('title', 'Login')

@section('content')
<div class="container py-5" style="max-width: 400px;">
    <div class="card shadow-lg border-0">
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <h2 class="text-center mb-4 text-primary"><i class="bi bi-person-badge"></i> student Login</h2>
            <form method="POST" action="{{ route('student.login.submit') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
                <div class="mt-3 text-center">
                    <a href="{{ route('student.create') }}" class="text-decoration-none">Belum punya akun? Tambah data siswa</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
