@extends('layout-dashboard.app')

@section('content')
 <div class="container py-5" style="background: linear-gradient(135deg, #f3e5f5 0%, #fff 100%); min-height: 100vh;">
    <div class="row mb-4">
        <div class="col-md-8 mx-auto text-center">
            <h1 class="display-4 fw-bold mb-3 text-purple" style="letter-spacing:2px;text-shadow:1px 2px 8px #d1c4e9;">
                <i class="bi bi-mortarboard-fill"></i> School Academy
            </h1>
            <p class="lead text-secondary" style="font-size:1.2rem;">School Academy is an educational institution designed to develop students’ potential to the fullest, both in academic and non-academic fields. The academy typically offers a specially designed curriculum to build character, enhance skills, and broaden students’ knowledge.</p>
        </div>
    </div>
    <div class="row justify-content-center g-4">
        <div class="col-md-10">
            <div class="card shadow-lg border-0 academy-card p-4">
                <div class="card-body">
                    <p class="fs-5 mb-3"><i class="bi bi-stars text-warning fs-4"></i> In a school academy, students don’t just learn from textbooks, but also through various activities such as <span class="fw-bold text-purple">leadership training, workshops, talent development programs, and career guidance</span>. It serves as a place for students to grow into independent, creative individuals who are ready to face future challenges.</p>
                    <p class="fs-5 mb-3"><i class="bi bi-laptop text-info fs-4"></i> The facilities provided by a school academy are usually modern and well-equipped, including <span class="fw-bold text-purple">interactive classrooms, laboratories, digital libraries, and access to the latest technology</span>. These features support an innovative and effective learning process.</p>
                    <p class="fs-5 mb-3"><i class="bi bi-people-fill text-success fs-4"></i> With a holistic approach, the school academy is committed to shaping a generation that is <span class="fw-bold text-purple">intelligent, has strong character, and contributes positively to society</span>.</p>
                </div>
            </div>
        </div>
    </div>
    <style>
        .text-purple { color: #7c4dff; }
        .academy-card:hover {
            box-shadow: 0 8px 32px rgba(124,77,255,.15);
            transform: scale(1.02);
        }
    </style>
 </div>
@endsection