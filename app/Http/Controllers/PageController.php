<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class PageController extends Controller {

    // public function __construct() {
    //     $this->middleware('auth');
    // }

    public function index() {

      return view('pages/home');
    }

    public function results() {
      $client = new Client();

      $response = $client->request('GET', '/root');
      $data = $response->getBody();
      $data = json_decode($data);
      $filteredData = [];
      // return $data->projects;
      foreach($data->projects as $project) {
        $fields = $project->fields;

        if(in_array("UI/UX", $fields) || in_array("Web Design",  $fields)) {
          array_push($filteredData, $project);
        }
      }
      return count($filteredData);


      // this foreach will return only first item in fields we get
      // foreach($data->projects as $project) {
      //   $fields = $project->fields;
      //   return $fields;
      // }

      return view('pages/results');
    }

    public function spinMe() {
      return view('spinners/spinner');
    }
}


// alternative to {{Auth::user()->name }} using that in layout
// public function index() {
//   $user = Auth::('user');
//   return view('pages/home', compact('user', $filteredData));
// }
//
// {{$user->name}}
