<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\View\View;




class StudentController extends Controller
{
    
    public function index(): View
    {
      

        $students = Student::simplePaginate(10); 

        return view('student.index')->with('students', $students)->with('i',(request()->input('page', 1)- 1)* 10);
    }
 
    public function create(): View
    {
        
        return view('student.create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Student::create($input);
        return redirect('student')->with('flash_message', 'Student Addedd!');
    }
    public function show(string $id): View
    {
        $student = Student::find($id);
        return view('student.show')->with('students', $student);
    }
    public function edit(string $id): View
    {
        $student = Student::find($id);
        return view('student.edit')->with('students', $student);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'student Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!'); 
    }
}

