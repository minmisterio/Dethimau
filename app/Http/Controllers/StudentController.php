<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_all_student()
    {
        $students = Student::all();
        return view('student.student_manage', ['students' => $students]);
    }
    public function get_student_by_id($id)
    {
        $student = Student::find($id);
        return view('student.student_edit', ['student' => $student]);
    }
    public function edit($id)
    {
        $student = Student::find($id);
        $student->fullname = request('fullname');
        $student->birthday = request('birthday');
        $student->address = request('address');
        $student->save();
        return redirect('/student');
    }
}
