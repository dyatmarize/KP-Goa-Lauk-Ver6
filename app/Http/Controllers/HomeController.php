<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
Use App\Article;
Use App\User;
use DB;
Use App\About;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $artikel = Article::paginate(3);
        $about = About::paginate(1);
        return view('home')->with(compact('artikel', 'about'));
    }
}
