<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/calendrier';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function login(Request $request){

      $user = User::where('username',$request->username)->first();
      if($user){
        if(sha1($request->password) == $user->password){
          Auth::login($user);
          return redirect('/calendrier');
        }
        else{
          return redirect('/');
        }
      }
      else{
        return redirect('/');
      }
    }

    public function logout(){
      Auth::logout();
      return redirect('/');
    }
  }
//openssl_random_pseudo_bytes(15));
