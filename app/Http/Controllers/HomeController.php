<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * 
     */
    Public function index(){
        $title = 'ONG';

        return view('welcome', compact($title) ) ;
    }



}
   
