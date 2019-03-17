<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Post;
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

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kategoris = Kategori::get();
        $posts = Post::with('user')->paginate(10);
//        return $posts;
        return view('pages.home', compact('kategoris', 'posts'));
    }
}
