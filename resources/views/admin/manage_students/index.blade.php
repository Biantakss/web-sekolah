@extends('layout-dashboard.app')

@section('content')
<div class="container py-4">
    <h2>Daftar Siswa</h2>
    <a href="{{ route('student.create') }}" class="btn btn-success mb-3">Tambah Siswa</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->NIS }}</td>
                <td>{{ $student->class }}</td>
                <td>{{ $student->email }}</td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm btn-edit"
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
                    <form method="POST" action="{{ route('manage.student.destroy', $student->id) }}" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus siswa ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal Edit Student & Script JS -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" action="{{ route('manage.student.edit') }}" enctype="multipart/form-data">
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
                            <label for="edit-class" class="form-label">Class</label>
                            <input type="text" class="form-control" name="class" id="edit-class" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit-gender" class="form-label">Gender</label>
                            <input type="text" class="form-control" name="gender" id="edit-gender" required>
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
                            <label for="edit-extracurricular" class="form-label">Extracurricular</label>
                            <input type="text" class="form-control" name="extracurricular" id="edit-extracurricular">
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
        </tbody>
    </table>
</div>
@endsection
