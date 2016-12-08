<?php

namespace App\Http\Controllers;
use App\User;
use App\Classe;
use Illuminate\Http\Request;

class PageUserController extends Controller
{
    public function index(){
      $users = User::get();
      return view('back.user.index',[
        'title' => 'Utilisateurs',
        'users' => $users
      ]);
    }

    public function create(){
      $classes = Classe::get();
      return view('back.user.create',[
        'title' => 'Création utilisateur',
        'classes' => $classes,
      ]);

    }

    public function edit(Request $request,$id){
      $user = User::get()->where('id',$id)->first();
      $classes = Classe::get();
      return view('back.user.edit',[
        'title' => 'Modification utilisateur',
        'users' => $user,
        'classe' => $classes
      ]);

    }
}
