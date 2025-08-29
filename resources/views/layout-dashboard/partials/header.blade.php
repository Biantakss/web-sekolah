<nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(90deg, #2196f3 0%, #6dd5ed 100%); box-shadow: 0 2px 12px rgba(33,150,243,.08);">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center gap-2" href="app">
      <i class="bi bi-mortarboard-fill fs-3 text-light"></i>
      <span class="fw-bold fs-4 text-light" style="font-family: 'Segoe UI', sans-serif; letter-spacing:1px;">Sekolah Terbaik</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="app"><i class="bi bi-house-door-fill"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="facility"><i class="bi bi-building"></i> Facility</a>
        </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 About School
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="academy">Academy</a></li>
                  <li><a class="dropdown-item" href="achievement">School Achievements</a></li>
                </ul>
              </li>
              
        <li class="nav-item">
          <a class="nav-link" href="admin-dashboard"><i class="bi bi-person-badge"></i> Dashboard (Admin)</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="student-profile"><i class="bi bi-person-badge"></i> student-profile</a>
        </li>
      </ul>
      <span class="navbar-text ms-lg-4 text-light fw-semibold">
        <i class="bi bi-chat-dots"></i> Welcome to the School Portal
      </span>
    </div>
  </div>
</nav>
<style>
  .navbar-nav .nav-link {
    font-size: 1.1rem;
    font-family: 'Segoe UI', sans-serif;
    border-radius: 8px;
    transition: background .2s, color .2s;
  }
  .navbar-nav .nav-link.active, .navbar-nav .nav-link:hover {
    background: rgba(255,255,255,.15);
    color: #fff !important;
  }
</style>