<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackController extends Controller
{
    public function index(){
      return view('back.index',[
        'title' => 'Epsic'
      ]);
    }
}
