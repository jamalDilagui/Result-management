<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resultat;
use App\Student;
use App\Classe;
use App\Exam;
use App\Subject;


class ResultatController extends Controller
{

    /* public function __construct()
    {
        $this->middleware('auth');
    } */

    public function index()
    {
        $resultat = Resultat::all();
        return view('resultat.resultat',compact('resultat'));
    }

  
    public function create()
    {
        
        $student = Student::all();
        $classe = Classe::all();
        $resultat = Resultat::all();
        $exam = Exam::all();
        $subject = Subject::all();
        return view('resultat.addResultat',compact('student','classe','resultat','exam','subject'));
    }

    public function store(Request $request)
    {
        $resultat = new Resultat();
        $resultat->exam_id = $request->exam_id;
        $resultat->classe_id = $request->classe_id;
        $resultat->subject_id = $request->subject_id;
        $resultat->student_id = $request->student_id;
        $resultat->written = $request->written;
        $resultat->orale = $request->orale;
        $resultat->classe = $request->classe;
        $written = $resultat->written;
        $orale = $resultat->orale;
        $classe = $resultat->classe;
        $somme = $written + $orale + $classe;
        $resultat->total =$somme/3;
        $resultat->save();
        return redirect('/resultat');
    }

    public function edit($id)
    {
        $resultat = Resultat::find($id);
        $student = Student::all();
        $classe = Classe::all();
        $exam = Exam::all();
        $subject = Subject::all();
        return view('resultat.editResultat',compact('resultat','exam','classe','student','subject'));
    }

   
    public function update(Request $request, $id)
    {
        $resultat = Resultat::find($id);
        $resultat->exam_id = $request->exam_id;
        $resultat->classe_id = $request->classe_id;
        $resultat->subject_id = $request->subject_id;
        $resultat->student_id = $request->student_id;
        $resultat->written = $request->written;
        $resultat->orale = $request->orale;
        $resultat->classe = $request->classe;
        $written = $resultat->written;
        $orale = $request->orale;
        $classe = $request->classe;
        $somme = $written + $orale + $classe;
        $resultat->total =$somme/3;
        $resultat->save();
        return redirect('/resultat');
    }

    public function destroy($id)
    {
        $resultat = Resultat::find($id);
        $resultat->delete();
        return redirect('/resultat');
    }

    public function getStudent(Request $request)
    {
        $classe_id = $request->classe_id;
        $student = Student::where('classe_id',$classe_id)->get();
        return $student;
    }
}
