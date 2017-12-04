<?php

namespace App\Http\Controllers;

use App\BlogPost;
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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogposts = BlogPost::orderBy('created_at', 'desc')->paginate(9);
        return view('home', ['blogposts' => $blogposts]);
    }
}
