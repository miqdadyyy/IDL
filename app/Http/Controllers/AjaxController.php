<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AjaxController extends Controller
{
    public function getPost(){
        return DataTables::of(Post::with('user')->get())->make(true);
    }
}
