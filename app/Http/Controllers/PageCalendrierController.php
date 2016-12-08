<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageCalendrierController extends Controller
{
    public function index(){
      return view('back.calandar.index',[
        'title' => 'Calendrier'
      ]);
    }
}
