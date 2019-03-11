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
        return view('pages.home');
    }
    public function getIsicPage()
    {
      return view('pages.isic');
    }
    public function getItecPage()
    {
      return view('pages.itec');
    }
    public function getLaosarenaPage()
    {
      return view('pages.laosarena');
    }
    public function getPkmgoPage()
    {
      return view('pages.pkmgo');
    }
    public function getSubmitPage()
    {
      return view('pages.submit');
    }
}
