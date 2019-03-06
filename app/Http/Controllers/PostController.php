<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // TODO : Return view admin posts management page
        return view('admin.pages.posts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // TODO : Return view admin add post
        return view('admin.pages.add_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->title;
        $desc = $request->desc;
        Post::createPost($title, $desc);

        // TODO : Redirect to admin index post
//        return redirect()->route()
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $author = Post::find($post->id)->user->name;

        // TODO : Show post by all user
//        return view('pages.post', compact('post', 'author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // TODO : View to edit post
//        return view('admin.pages.edit_post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $title = $request->title;
        $desc = $request->desc;
        $id = $post->id;

        $post = Post::updatePost($id, $title, $desc);
        if(!$post){
            // TODO : Return if post not found
        }

        // TODO : Return redirect to post index
//        return redirect()->route('');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post = Post::deletePost($post->id);
        if(!post){
            // TODO : If post not found
        }


        // TODO : If post deleted
    }
}
