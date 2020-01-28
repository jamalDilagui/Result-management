<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Classe;
use DB;


class StudentController extends Controller
{

    /* public function __construct()
    {
        $this->middleware('auth');
    } */

    public function index(Request $request)
    {
        $student = Student::all();
        /* $student = DB::table('students')
        ->join('classes','students.classe_id','classes.id')
        ->get(); */
        /* dd($student); */
        $classe = Classe::all();
        return view('student.student',compact('student','classe'));
    }

    public function create()
    {
        $classe = Classe::all();
        return view('student.addStudent',compact('classe'));
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->fullname = $request->fullname;
        $student->email = $request->email;
        $student->gender = $request->gender;
        $student->session = $request->session;
        $student->classe_id = $request->classe_id;
        $student->dob = $request->dob;
        $student->save();
        return redirect('/student');
       
    }


    public function edit($id)
    {
        $student = Student::find($id);
       /*  dd($student); */
        $classe = Classe::all();
        return view('student.editStudent',compact('student','classe'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->fullname = $request->fullname;
        $student->email = $request->email;
        $student->gender = $request->gender;
        $student->session = $request->session;
        $student->classe_id = $request->classe_id;
        $student->dob = $request->dob;
        $student->save();
        return redirect('/student');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/student');
    }
}
