<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function hieveryone(){
        echo"hi every one ";
    }
    public function new(){
        echo"this is the new functio iam uploading on the git hub";
    }
    public function staticfunction(){
        echo"this is the static function";
    }
    public function checkgitstatus(){
        echo"finally we check the git status";

    }
    public function add(){
        echo"finally add the second function";
    }
}
