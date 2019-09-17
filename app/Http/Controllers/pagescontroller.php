<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public  function __construct()
    {
        $this->middleware('auth');
    }
    public function homepage() {
        $halaman = 'home';
        return view  ('pages.homepage');
    }
    public function about() {
        $halaman = 'about';
        return view('pages.about');
    }
    public function register() {
        $halaman = 'register';
        return view('pages.register', compact('halaman')); 
    }
}
