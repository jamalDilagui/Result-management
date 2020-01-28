<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Classe;

class SubjectController extends Controller
{
    /* public function __construct()
    {
        $this->middleware('auth');
    } */

    public function index()
    {
        $subject = Subject::all();
        return view('subject.subject',compact('subject'));
    }

    public function create()
    {
        $classe = Classe::all();
        return view('subject.addSubject',compact('classe'));
    }

    public function store(Request $request)
    {
        $subject = new Subject();
        $subject->name = $request->name;
        $subject->classe_id = $request->classe_id;
        $subject->save();
        return redirect('/subject');
    }

    public function edit($id)
    {
        $classe = Classe::all();
        $subject = Subject::find($id);
        return view('subject.editSubject',compact('subject','classe'));
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::find($id);
        $subject->name = $request->name;
        $subject->classe_id = $request->classe_id;
        $subject->save();
        return redirect('/subject');
    }


    public function destroy($id)
    {
        $subject = Subject::find($id);
        $subject->delete();
        return redirect('/subject');
    }
}
