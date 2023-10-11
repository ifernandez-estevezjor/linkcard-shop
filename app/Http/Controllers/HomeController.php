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
        $title = 'Linkcards';
        return view('home', compact('title'));
    }

    public function editProfileUser(){
        return view('editProfileUser');
    }

    public function editLinkcard(){
        return view('editLinkcard');
    }   

    /**
     * Show tha application dashboard.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(){
        $title = 'Linkcards';
        return view('adminHome', compact('title'));
    }

    /**
     * Show tha application dashboard.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome(){
        return view('managerHome');
    }

    
}
