@extends('layout-dashboard.app')

@section('content')
    <div class="container py-5" style="background: linear-gradient(135deg, #e3f2fd 0%, #fff 100%); min-height: 100vh;">
        <div class="row mb-4">
            <div class="col-md-8 mx-auto text-center">
                <h1 class="display-3 fw-bold mb-3 text-primary" style="letter-spacing:2px;text-shadow:1px 2px 8px #7c4dff;">🏫 School Facilities</h1>
                <p class="lead text-secondary" style="font-size:1.2rem;">School facilities play a vital role in supporting the teaching and learning process.<br>
                Our school is committed to providing complete and high-quality infrastructure to create a safe, comfortable, and conducive learning environment for all students.</p>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg border-0 facility-card" style="transition:transform .2s;">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="bi bi-easel2-fill text-info fs-3"></i> <span class="fw-bold">Well-Equipped Classrooms 👨‍🎓</span></h5>
                        <p class="card-text text-secondary">Designed for effective learning with good lighting, ventilation, and tools like whiteboards and projectors.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg border-0 facility-card" style="transition:transform .2s;">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="bi bi-flask text-success fs-3"></i> <span class="fw-bold">Modern Laboratories 🏆</span></h5>
                        <p class="card-text text-secondary">Science, computer, and language labs with up-to-date equipment that meets educational standards.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg border-0 facility-card" style="transition:transform .2s;">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="bi bi-book text-warning fs-3"></i> <span class="fw-bold">Library 📕</span></h5>
                        <p class="card-text text-secondary">A modern library with a wide range of books and digital resources, plus a quiet space for reading.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg border-0 facility-card" style="transition:transform .2s;">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="bi bi-trophy text-danger fs-3"></i> <span class="fw-bold">Sports Facilities 💪</span></h5>
                        <p class="card-text text-secondary">Including a football field, basketball and volleyball courts, and an indoor area for sports activities.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg border-0 facility-card" style="transition:transform .2s;">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="bi bi-moon-stars text-primary fs-3"></i> <span class="fw-bold">Prayer Room 🕍</span></h5>
                        <p class="card-text text-secondary">Clean and comfortable space for students and staff to perform religious duties.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg border-0 facility-card" style="transition:transform .2s;">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="bi bi-heart-pulse text-danger fs-3"></i> <span class="fw-bold">Health Unit (UKS) 🏣</span></h5>
                        <p class="card-text text-secondary">A first aid station for students who experience health issues at school.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg border-0 facility-card" style="transition:transform .2s;">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="bi bi-cup-hot text-warning fs-3"></i> <span class="fw-bold">Healthy School Canteen 🍽</span></h5>
                        <p class="card-text text-secondary">Offers clean, nutritious, and affordable food and beverages.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-8 mx-auto text-center">
                <p class="fs-5 text-dark">With these facilities, our school strives to create a learning environment that not only supports academic achievement but also promotes character development and life skills.</p>
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