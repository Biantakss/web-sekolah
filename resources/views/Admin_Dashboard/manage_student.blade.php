


@extends('layout-dashboard.app')


@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-edit {
            min-width: 60px;
            background: #0d6efd;
            color: #fff;
            border: 2px solid #0d6efd;
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
<style>
    .btn-edit {
        min-width: 60px;
        background: #0d6efd !important;
        color: #fff !important;
        border: 2px solid #0d6efd !important;
        font-weight: bold;
        z-index: 10;
    }
</style>
<div class="container">
    <h1 class="mb-4">Manage Students</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>NIS</th>
                <th>NISN</th>
                <th>Name</th>
                <th>Class</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Extracurricular</th>
                <th>Parents</th>
                <th>Address</th>
                <th>Birth Date</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($students as $student)
                <tr>
                    <td>{{ $student->NIS }}</td>
                    <td>{{ $student->NISN }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone_number }}</td>
                    <td>{{ $student->extracurricular }}</td>
                    <td>{{ $student->parents_name }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->birth_date }}</td>
                    <td>
                        @if($student->images)
                            <img src="{{ asset('storage/students/'.$student->images) }}" width="50">
                        @else
                            <span>No Image</span>
                        @endif
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-primary btn-edit"
                            data-id="{{ $student->id }}"
                            data-nis="{{ $student->NIS }}"
                            data-nisn="{{ $student->NISN }}"
                            data-name="{{ $student->name }}"
                            data-class="{{ $student->class }}"
                            data-gender="{{ $student->gender }}"
                            data-email="{{ $student->email }}"
                            data-phone="{{ $student->phone_number }}"
                            data-extracurricular="{{ $student->extracurricular }}"
                            data-parents="{{ $student->parents_name }}"
                            data-address="{{ $student->address }}"
                            data-birth_date="{{ $student->birth_date }}"
                            data-images="{{ $student->images }}"
                            data-bs-toggle="modal" data-bs-target="#editModal">
                            Edit
                        </button>
                            <form method="POST" action="{{ route('manage.student.destroy', $student->id) }}" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this student?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="13" class="text-center">No students found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Modal Edit Student & Script JS -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" action="{{ route('student.edit') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Student</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="edit-id">
                        <div class="mb-3">
                            <label for="edit-nis" class="form-label">NIS</label>
                            <input type="text" class="form-control" name="NIS" id="edit-nis" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit-nisn" class="form-label">NISN</label>
                            <input type="text" class="form-control" name="NISN" id="edit-nisn" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit-name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="edit-name" required>
                        </div>
                            <div class="mb-3">
                             <label for="class" class="form-label">Kelas</label>
                               <select class="form-control" id="class" name="class" required>
                                <option value="X-A">X-A</option>
                                <option value="X-B">X-B</option>
                                <option value="X-C">X-C</option>
                                <option value="XI-A">XI-A</option>
                                <option value="XI-B">XI-B</option>
                                <option value="XI-C">XI-C</option>
                                <option value="XII-A">XII-A</option>
                                <option value="XII-B">XII-B</option>
                                <option value="XII-C">XII-C</option>
                            </select>
                        </div>
                            <div class="mb-3">
                            <label for="gender" class="form-label">Jenis Kelamin</label>
                             <select class="form-control" id="gender" name="gender" required>
                            <option value="Laki-laki">Laki-laki</option>
                             <option value="Perempuan">Perempuan</option>
                        </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit-email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="edit-email" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit-phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone_number" id="edit-phone">
                        </div>
                             <div class="mb-3">
            <label for="extracurricular" class="form-label">Ekstrakurikuler</label>
                        <select class="form-control" id="extracurricular" name="extracurricular" required>
                <option value="Skateboard">Skateboard</option>
                <option value="Soccer">Soccer</option>
                <option value="BasketBall">BasketBall</option>
                <option value="Volly">Volly</option>
                <option value="Modern Music">Modern Music</option>
                <option value="Traditional Music">Traditional Music</option>
                <option value="Traditional Dance">Traditional Dance</option>
                <option value="Paskibra">Paskibra</option>
                <option value="Pramuka">Pramuka</option>
            </select>
        </div>
                        <div class="mb-3">
                            <label for="edit-parents" class="form-label">Parents</label>
                            <input type="text" class="form-control" name="parents_name" id="edit-parents">
                        </div>
                        <div class="mb-3">
                            <label for="edit-address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="edit-address">
                        </div>
                        <div class="mb-3">
                            <label for="edit-birth_date" class="form-label">Birth Date</label>
                            <input type="date" class="form-control" name="birth_date" id="edit-birth_date">
                        </div>
                        <div class="mb-3">
                            <label for="edit-images" class="form-label">Image</label>
                            <input type="text" class="form-control" name="images" id="edit-images">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="edit-save">Save</button>
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
                document.getElementById('edit-id').value = btn.getAttribute('data-id') || '';
                document.getElementById('edit-nis').value = btn.getAttribute('data-nis') || '';
                document.getElementById('edit-nisn').value = btn.getAttribute('data-nisn') || '';
                document.getElementById('edit-name').value = btn.getAttribute('data-name') || '';
                document.getElementById('edit-class').value = btn.getAttribute('data-class') || '';
                document.getElementById('edit-gender').value = btn.getAttribute('data-gender') || '';
                document.getElementById('edit-email').value = btn.getAttribute('data-email') || '';
                document.getElementById('edit-phone').value = btn.getAttribute('data-phone') || '';
                document.getElementById('edit-extracurricular').value = btn.getAttribute('data-extracurricular') || '';
                document.getElementById('edit-parents').value = btn.getAttribute('data-parents') || '';
                document.getElementById('edit-address').value = btn.getAttribute('data-address') || '';
                document.getElementById('edit-birth_date').value = btn.getAttribute('data-birth_date') || '';
                document.getElementById('edit-images').value = btn.getAttribute('data-images') || '';
            });
        });
    });
    </script>




@endsection