@extends('layout-dashboard.app')

@section('content')
<div class="container py-4">
    <h2>Tambah Siswa</h2>
    <form method="POST" action="{{ url('/register-student') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="NIS" class="form-label">NIS</label>
            <input type="text" class="form-control" id="NIS" name="NIS" required>
        </div>
        <div class="mb-3">
            <label for="NISN" class="form-label">NISN</label>
            <input type="text" class="form-control" id="NISN" name="NISN" required>
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
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Jenis Kelamin</label>
            <select class="form-control" id="gender" name="gender" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
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
            <label for="birth_date" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date">
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">No. Telepon</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="mb-3">
            <label for="parents_name" class="form-label">Nama Orang Tua</label>
            <input type="text" class="form-control" id="parents_name" name="parents_name">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
