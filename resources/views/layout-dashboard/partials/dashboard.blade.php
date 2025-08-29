@extends('layout-dashboard/app')

@section('content')
 <div class="position-relative w-100" style="height: 450px;">
    <div id="schoolCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/Staples_High_School,_Westport,_CT.jpg') }}" class="d-block w-100" style="height:450px;object-fit:cover;" alt="School 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/sudfvs.jpg') }}" class="d-block w-100" style="height:450px;object-fit:cover;" alt="School 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/asd.png') }}" class="d-block w-100" style="height:450px;object-fit:cover;" alt="School 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#schoolCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#schoolCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
   
     
        <div class="position-absolute top-50 start-50 translate-middle text-white text-center w-100 px-3">
            <h1>Welcome to the School</h1>
            <p>This is the best school in the world.</p>
            <p>We provide quality education and a supportive environment for all students.</p>
            <p>Join us to achieve your academic goals and build a bright future.</p>
        </div>
    </div>
    
@endsection    