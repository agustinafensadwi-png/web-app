<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => 'required|string|unique:students,nim',
            'nama' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
        ]);

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Data student berhasil ditambahkan.');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'nim' => 'required|string|unique:students,nim,' . $student->id,
            'nama' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
        ]);

        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Data student berhasil diperbarui.');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Data student berhasil dihapus.');
    }
}