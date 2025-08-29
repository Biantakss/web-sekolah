<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Photo;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
        public function uploadFoto(Request $request, $id)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $student = Student::findOrFail($id);
        $file = $request->file('photo');
        $fileName = time().'_'.$file->getClientOriginalName();
        $filePath = $file->storeAs('uploads/photos', $fileName, 'public');

        $photo = new Photo([
            'file_path' => 'storage/'.$filePath,
            'original_name' => $file->getClientOriginalName(),
            'mime_type' => $file->getClientMimeType(),
            'size' => $file->getSize(),
        ]);
        $student->photos()->save($photo);

        return back()->with('success', 'Foto berhasil diupload!');
    }

    public function index()
    {
        $student = auth()->guard('student')->user();
        return view('Student_Dashboard.profile', [
            'title' => 'profile',
            'student' => $student
        ]);
    }

      public function tambahDataUser(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'NIS'           => 'required|string|max:20|unique:users,NIS',
            'NISN'          => 'required|string|max:20|unique:users,NISN',
            'class'         => 'required|string|max:50|unique:users,class',
            'gender'        => 'required|in:L,P',
            'extracurricular' => 'required|in:Basket,Volly,Pramuka,PMR,Paskibra,Band,Teater',
            'birth_date'    => 'nullable|date',
            'address'       => 'nullable|string|max:255',
            'parents_name'  => 'nullable|string|max:255',
            'phone_number'  => 'nullable|string|max:20',
        ]);
    }

public function editDataUser(Request $request)
{
    $validated = $request->validate([
        'id'              => 'required|exists:students,id',
        'name'            => 'required|string|max:255',
        'NIS'             => 'required|string|max:50',
        'NISN'            => 'required|string|max:50',
        'class'           => 'required|string|max:50',
        'gender'          => 'required|string',
        'extracurricular' => 'nullable|string',
        'email'           => 'required|email',
        'birth_date'      => 'nullable|date',
        'address'         => 'nullable|string|max:255',
        'phone_number'    => 'nullable|string|max:20',
        'parents_name'    => 'nullable|string|max:255',
        'images'          => 'nullable|string',
    ]);

    DB::beginTransaction();
    try {
        $student = Student::findOrFail($validated['id']);
        $student->update($validated);

        DB::commit();
        return redirect()->back()->with('success', 'Data Siswa berhasil diperbarui.');
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->with('error', 'Gagal memperbarui Siswa: ' . $e->getMessage());
    }
}
}