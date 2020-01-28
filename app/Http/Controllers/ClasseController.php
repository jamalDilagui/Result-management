<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classe;

class ClasseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index()
    {
        $classe = Classe::all();
        return view('classe.classe',compact('classe'));
    }

    
    public function create()
    {
        return view('classe.addClasse');
    }

    
    public function store(Request $request)
    {
        $classe = new Classe();
        $classe->num_classe = $request->num_classe;
        $classe->save();
        return redirect('classe');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $classe = Classe::find($id);
        return view('classe.editClasse',compact('classe'));
    }

   
    public function update(Request $request, $id)
    {
        $classe = Classe::find($id);
        $classe->num_classe = $request->num_classe;
        $classe->save();
        return redirect('classe');
    }

    
    public function destroy($id)
    {
        $classe = Classe::find($id);
        $classe->delete();
        return redirect('classe');
    }
}
