<?php

namespace App\Http\Controllers;
use App\User;
use App\Classe;
use Illuminate\Http\Request;

class PageClasseController extends Controller
{
    public function index(){
      $classes = Classe::get();
      return view('back.classe.index',[
        'title' => 'Classes',
        'classes' => $classes
      ]);
    }

    public function create(){
      $classes = Classe::get();
      return view('back.classe.create',[
        'title' => 'Création de classes',
        'classes' => $classes,
      ]);

    }

    public function edit(Request $request,$id){
      $user = User::get()->where('id',$id)->first();
      $classes = Classe::get();
      return view('back.user.edit',[
        'title' => 'Modification utilisateur',
        'users' => $user,
        'classes' => $classes
      ]);

    }
}
