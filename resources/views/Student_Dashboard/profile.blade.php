
@extends('layout-dashboard.app')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #e0e7ff 0%, #f6f8fb 100%);
        min-height: 100vh;
    }
    .elegant-card {
        background: #fff;
        border-radius: 1.25rem;
        box-shadow: 0 8px 32px 0 rgba(60,72,88,0.14);
        border: 1px solid #e3e6ed;
        padding: 2.5rem 2rem 2rem 2rem;
        transition: box-shadow 0.2s;
        position: relative;
        overflow: hidden;
    }
    .elegant-card::before {
        content: "";
        position: absolute;
        top: -60px;
        right: -60px;
        width: 180px;
        height: 180px;
        background: linear-gradient(135deg, #4f8cff 0%, #a5b4fc 100%);
        opacity: 0.12;
        border-radius: 50%;
        z-index: 0;
    }
    .profile-img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #4f8cff;
        background: #f6f8fb;
        box-shadow: 0 2px 8px rgba(60,72,88,0.10);
        margin-bottom: 1rem;
        transition: box-shadow 0.2s, transform 0.2s;
        z-index: 1;
        position: relative;
    }
    .profile-img:hover {
        box-shadow: 0 8px 32px rgba(60,72,88,0.18);
        transform: scale(1.06);
    }
    .edit-btn {
        background: #4f8cff;
        border: none;
        color: #fff;
        border-radius: 1.5rem;
        padding: 0.5rem 1.5rem;
        font-weight: 500;
        font-size: 1rem;
        box-shadow: 0 2px 8px rgba(79,140,255,0.10);
        transition: background 0.2s, box-shadow 0.2s;
        margin-right: 0.5rem;
    }
    .edit-btn:hover {
        background: #2d6cdf;
        box-shadow: 0 4px 16px rgba(79,140,255,0.18);
    }
    .card-header {
        background: none !important;
        border-bottom: none;
        padding-bottom: 0;
        z-index: 1;
        position: relative;
    }
    .profile-title {
        font-size: 1.7rem;
        font-weight: 700;
        color: #2d3a4a;
        letter-spacing: 0.5px;
        margin-left: 0.5rem;
    }
    .profile-info p {
        font-size: 1.08rem;
        color: #4f5d75;
        margin-bottom: 0.5rem;
    }
    .profile-info strong {
        color: #2d3a4a;
    }
    .badge {
        font-size: 1rem;
        border-radius: 0.5rem;
        padding: 0.35em 0.8em;
        background: #e0e7ff;
        color: #4f8cff;
        font-weight: 600;
    }
    .btn-danger {
        border-radius: 1.5rem;
        font-weight: 500;
        padding: 0.5rem 1.5rem;
        font-size: 1rem;
        box-shadow: 0 2px 8px rgba(255,79,79,0.10);
        transition: background 0.2s, box-shadow 0.2s;
    }
    .btn-danger:hover {
        background: #d32f2f;
        box-shadow: 0 4px 16px rgba(255,79,79,0.18);
    }
    @media (max-width: 768px) {
        .elegant-card {
            padding: 1.5rem 0.5rem 1rem 0.5rem;
        }
        .profile-title {
            font-size: 1.2rem;
        }
        .profile-img {
            width: 90px;
            height: 90px;
        }
    }
</style>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="elegant-card mx-auto">
                <div class="card-header d-flex align-items-center mb-3">
                    <i class="bi bi-person-circle me-2" style="font-size: 2.2rem; color: #4f8cff;"></i>
                    <span class="profile-title">Profil Siswa</span>
                </div>
                <div class="text-center mb-3">
                    @php
                        $photo = $student->photos->first();
                    @endphp
                    @if($photo)
                        <img src="{{ asset($photo->file_path) }}" class="profile-img" alt="Foto Siswa">
                    @else
                        <img src="{{ asset('images/images (1).png') }}" class="profile-img" alt="Foto Siswa">
                    @endif
                </div>
                <form method="POST" action="{{ url('student/'.$student->id.'/upload-foto') }}" enctype="multipart/form-data" class="mb-4">
                    @csrf
                    <div class="form-group mb-2 text-center">
                        <label for="photo" class="btn btn-outline-primary btn-sm mb-0">Pilih Foto</label>
                        <input type="file" id="photo" name="photo" accept="image/*" style="display:none;" onchange="this.form.submit()">
                    </div>
                </form>
                <div class="col-md-8 profile-info mx-auto">
                    <h3 class="fw-bold mb-2" style="color:#4f8cff;"><i class="bi bi-person-fill"></i> {{ $student->name ?? 'Nama Siswa' }}</h3>
                    <p><strong>NIS:</strong> <span class="badge">{{ $student->NIS ?? '-' }}</span></p>
                    <p><strong>Email:</strong> {{ $student->email ?? '-' }}</p>
                    <p><strong>Kelas:</strong> <span class="badge">{{ $student->class ?? '-' }}</span></p>
                    <p><strong>Alamat:</strong> {{ $student->address ?? '-' }}</p>
                    <p><strong>Nomor Telepon:</strong> {{ $student->phone_number ?? '-' }}</p>
                    <p><strong>Ekstrakurikuler:</strong> {{ $student->extracurricular ?? '-' }}</p>
                    <p><strong>Jenis Kelamin:</strong> {{ $student->gender ?? '-' }}</p>
                </div>
                <hr class="my-4">
                <div class="d-flex justify-content-end align-items-center gap-2">
              <button type="button" class="btn btn-sm btn-warning btn-edit"
    data-id="{{ $student->id }}"
    data-name="{{ $student->name }}"
    data-email="{{ $student->email }}"
    data-umur="{{ $student->umur }}"
    data-telepon="{{ $student->nomor_telepon }}"
    data-jenis="{{ $student->jenis_kelamin }}"
    data-bs-toggle="modal"
    data-bs-target="#editModal">
    Edit
</button>
                    <form method="POST" action="{{ route('student.logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class="bi bi-box-arrow-right"></i> Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endsection

<!-- Modal Edit Siswa -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('student.edit') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="edit-id">
                    <div class="mb-3">
                        <label for="edit-name" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" id="edit-name" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="edit-email" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-umur" class="form-label">Umur</label>
                        <input type="number" class="form-control" name="extracurricular" id="edit-umur" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-telepon" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" name="nomor_telepon" id="edit-telepon" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-jenis" class="form-label">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="edit-jenis" required>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
        const editButtons = document.querySelectorAll('.btn-edit');
        editButtons.forEach(btn => {
                btn.addEventListener('click', function () {
                        document.getElementById('edit-id').value = btn.getAttribute('data-id');
                        document.getElementById('edit-name').value = btn.getAttribute('data-name');
                        document.getElementById('edit-email').value = btn.getAttribute('data-email');
                        document.getElementById('edit-umur').value = btn.getAttribute('data-umur');
                        document.getElementById('edit-telepon').value = btn.getAttribute('data-telepon');
                        document.getElementById('edit-jenis').value = btn.getAttribute('data-jenis');
                });
        });
});
</script>