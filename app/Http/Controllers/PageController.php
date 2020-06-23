<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller {

    // public function __construct() {
    //     $this->middleware('auth');
    // }

    public function index() {

      return view('pages/home');
    }

    public function results() {

      return view('pages/results');
    }

    public function spinMe() {
      return view('spinners/spinner');
    }
}


// alternative to {{Auth::user()->name }} using that in layout
// public function index() {
//   $user = Auth::('user');
//   return view('pages/home', compact('user'));
// }
//
// {{$user->name}}
