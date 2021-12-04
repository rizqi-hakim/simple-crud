<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('student.index', compact('student'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        Student::create([
            'name' => $request->name,
            'address' => $request->address,
            'telp' => $request->telp
        ]);

        return redirect(route('index'));
    }

    public function edit($id)
    {
        $student = Student::find($id);

        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        $student->update([
            'name' => $request->name,
            'address' => $request->address,
            'telp' => $request->telp
        ]);

        return redirect(route('index'));
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect(route('index'));
    }
}
