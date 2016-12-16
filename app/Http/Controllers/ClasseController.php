<?php

namespace App\Http\Controllers;
use App\User;
use App\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function index(){

    }

    public function create(Request $request){
        $classes = Classe::get();
        foreach($classes as $classe){
          if($request->classe == $classe->classe){
            return redirect('/classe')->with('ClassTaken','ClassTaken');
          }
        }
        Classe::insert(['classe' => $request->classe]);
        return redirect('/classe/create')->with('Created','Created');
        
    }

    public function edit(Request $request,$id){
          }
}
