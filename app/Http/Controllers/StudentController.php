<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('especialidad')->get();

        return view("students.index", compact("students"));
    }

    public function add()
    {
        $especialidades = Especialidad::all();
        return view("students.add", compact("especialidades"));
    }

    public function store(Request $request)
    {

        $request->validate([
            'no_control' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'specialty_id' => ['required', 'integer', 'exists:specialties,id'],
            'group' => ['required', 'string', 'max:255'],
        ]);

        $nuevoStudent = new Student($request->all());
        $nuevoStudent->save();

        return redirect("estudiantes");
    }


    public function edit($id)
    {
        $student = Student::find($id);
        $especialidades = Especialidad::all();

        return view("students.edit", compact("student", "especialidades"));
    }

    public function update(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'id'=> ['required', 'integer', 'exists:students,id'],
            'no_control' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'specialty_id' => ['required', 'integer', 'exists:specialties,id'],
            'group' => ['required', 'string', 'max:255'],
        ]);

        $student = Student::find($request->id);
        $student->update($request->all());
        return redirect("estudiantes");
    }

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect("estudiantes");
    }
}
