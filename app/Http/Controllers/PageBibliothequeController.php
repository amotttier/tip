<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageBibliothequeController extends Controller
{
    public function index(){
      return view('back.bibliotheque.index',[
        'title' => 'Bibliotheque'
      ]);
    }
}
