<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
use App\Classe;

class ExamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $exam = Exam::all();
        return view('exam.exam',compact('exam'));
    }

    
    public function create()
    {
        $classe = Classe::all();
        return view('exam.addExam',compact('classe'));
    }

    
    public function store(Request $request)
    {
        $exam = new Exam();
        $exam->name = $request->name;
        $exam->classe_id = $request->classe_id;
        $exam->save();
        return redirect('/exam');
    }

    
    public function edit($id)
    {

        $exam = Exam::find($id);
        $classe = Classe::all();
        return view('exam.editExam',compact('exam','classe'));
    }

   
    public function update(Request $request, $id)
    {
        $exam = Exam::find($id);
        $exam->name = $request->name;
        $exam->classe_id = $request->classe_id;
        $exam->save();
        return redirect('/exam');
    }

    
    public function destroy($id)
    {
        $exam = Exam::find($id);
        $exam->delete();
        return redirect('exam');
    }
}
