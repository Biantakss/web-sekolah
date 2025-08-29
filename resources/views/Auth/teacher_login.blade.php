@extends('layout-dashboard.app')

@section('title', 'Login')

@section('content')
<div class="container py-5" style="max-width: 400px;">
    <div class="card shadow-lg border-0">
        <div class="card-body">
            <h2 class="text-center mb-4 text-primary"><i class="bi bi-person-badge"></i> Teacher Login</h2>
            <form method="POST" action="{{ route('teacher.login.submit') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100" href='admin-dashboard'>Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
