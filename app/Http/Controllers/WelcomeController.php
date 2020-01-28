<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resultat;
use App\Student;
use App\Classe;
use App\Exam;
use App\Subject;

class WelcomeController extends Controller
{
    
    public function index()
    {
        $classe = Classe::all();
        return view('welcome',compact('classe'));
    }

    public function getStudent(Request $request)
    {
        $classe_id = $request->classe_id;
        $student = Student::where('classe_id',$classe_id)->get();
        return $student;
    }

    public function yourResultat(Request $request)
    {
        $student_id = $request->student_id;
        $resultat = Resultat::where('student_id',$student_id)->get();
        return view('resultat.studentResultat',compact('resultat'));
    }

    
}
