@extends('layout-dashboard.app')

@section('content')
    <div class="container py-5" style="background: linear-gradient(135deg, #e3f2fd 0%, #fff 100%); min-height: 100vh;">
        <div class="row mb-4">
            <div class="col-md-8 mx-auto text-center">
                <h1 class="display-3 fw-bold mb-3 text-primary" style="letter-spacing:2px;text-shadow:1px 2px 8px #7c4dff;">🏆 School achievement</h1>
                <p class="lead text-secondary" style="font-size:1.2rem;">School Achievement<br>
                Our school is committed to providing complete and high-quality infrastructure to create a safe, comfortable, and conducive learning environment for all students.</p>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg border-0 facility-card" style="transition:transform .2s;">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="bi bi-easel2-fill text-info fs-3"></i> <span class="fw-bold">1st Place – City-Level Science Olympiad 🥇</span></h5>
                        <p class="card-text text-secondary">won by our science team in a prestigious interschool competition.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg border-0 facility-card" style="transition:transform .2s;">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="bi bi-flask text-success fs-3"></i> <span class="fw-bold">Overall Champion – Regency-Level Quiz Competition 🏆</span></h5>
                        <p class="card-text text-secondary">showcasing our students’ exceptional academic abilities.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg border-0 facility-card" style="transition:transform .2s;">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="bi bi-book text-warning fs-3"></i> <span class="fw-bold">Gold Medal – Provincial classical music Championship 🥇</span></h5>
                        <p class="card-text text-secondary">demonstrating excellence in music performance and artistry.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg border-0 facility-card" style="transition:transform .2s;">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="bi bi-trophy text-danger fs-3"></i> <span class="fw-bold">2nd Place – National Traditional Dance Festival 🥈</span></h5>
                        <p class="card-text text-secondary">Including a football field, basketball and volleyball courts, and an indoor area for sports activities.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg border-0 facility-card" style="transition:transform .2s;">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="bi bi-moon-stars text-primary fs-3"></i> <span class="fw-bold">Adiwiyata School Award 🏆</span></h5>
                        <p class="card-text text-secondary">recognizing our commitment to environmental care and sustainability.</p>
                    </div>
                </div>
            </div>
           

        <div class="row mt-5">
            <div class="col-md-8 mx-auto text-center">
                <p class="fs-5 text-dark">These achievements serve as motivation for the entire school community to continue innovating, competing with integrity, and reaching even greater accomplishments in the future.</p>
            </div>
        </div>
    </div>
    <style>
        .facility-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 32px rgba(33,150,243,.15);
        }
    </style>
    </div>
@endsection