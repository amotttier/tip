<?php

namespace App\Http\Controllers;
use App\User;

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
      return view('back.user.create',[
        'title' => 'Création utilisateur',
      ]);

    }
}
