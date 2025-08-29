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
                    <label for="name" class="form-label">Name</label>
                    <input type="name" class="form-control" id="name" name="name" required autofocus>
                </div>

                 <div class="mb-3">
                    <label for="NIP" class="form-label">NIP</label>
                    <input type="NIP" class="form-control" id="NIP" name="NIP" required autofocus>
                </div>

                 <div class="mb-3">
                    <label for="subject" class="form-label">subject</label>
                    <input type="subject" class="form-control" id="subject" name="subject" required autofocus>
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required autofocus>
                </div>

                 <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <input type="gender" class="form-control" id="gender" name="gender" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <input type="phone_number" class="form-control" id="phone_number" name="phone_number" required autofocus>

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
