<?php

namespace App\Http\Controllers;
use App\User;
use App\Classe;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

    }

    public function create(){

    }

    public function edit(Request $request,$id){
      $users = User::get();
      foreach($users as $user){
        if($request->id == $user->id){
          $user->update([
            'username' => $request->username,
            'first_name' => $request->prenom,
            'last_name' => $request->nom,
            'email' => $request->mail,
            'type' => $request->role,
          ]);
            return redirect('/user/')->with('Successful','Sucessful');
          //return redirect('/user/'.$id.'/edit')->with('ErrorUsername','UsernameTaken');
        }else{
        }
        }
      }
}
