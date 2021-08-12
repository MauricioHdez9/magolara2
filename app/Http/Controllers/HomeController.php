<?php

namespace App\Http\Controllers;
use App\Category;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
   public function getreport()
    {
        $categories = Category::where('project_id',1)->get();//solo traira los datos que concida con 1
        return view('report')->with(compact('categories'));
    }
    public function postreport()
    {
        $categories = Category::where('project_id',1)->get();//solo traira los datos que concida con 1
        return view('report')->with(compact('categories'));
    }
}
