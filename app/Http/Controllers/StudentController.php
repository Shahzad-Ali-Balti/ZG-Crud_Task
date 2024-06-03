<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        dd($students);
        return view('students.index', ['students' => $students]);
    }
    public function create(){
        return view('students.create');
    }
    public function store(Request $request){
        // dd($request->all());
        // $imageName=time().'.'.$request->image->extension();
        // $request->image->move(public_path('students'), $imageName);
        $request->validate([
            'name' => 'required|string|max:255',
            'department'=> 'required|string|max:255',
            'age'=> 'required|string|max:255'
        ]);
        
        $student = new Student();
        $student->name = $request->input('name'); 
        $student->department = $request->input('department'); 
        $student->age = $request->input('age');

        $student->save();

        return back()->with('success', 'Student data saved successfully.');

    }
}
