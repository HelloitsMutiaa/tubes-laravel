<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Traits\KaryaUpload;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('dashboard.dashboard', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.dashboard-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    use KaryaUpload;
    public function store(Request $request)
    {
        $post = new Post;
        $post->user_id = $request->user;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = $request->image;
        if($post->image){
            $filepath = $this->UserImageUpload($post->image);
            $post->image = $filepath;
        }
        $post->save();
        
        return redirect()->route('post')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('dashboard.dashboard-edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */

    private function handleRequest($request)
    {
        $data = $request->all();
        return $data;
    }

    public function update(Requests\PostRequest $request, $id)
    {
        $post = Post::findfOrFail($id);
        $data = $this->handleRequest($request);
        $post->update($data);
        return redirect(route('post'))->with('message', 'Data berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post')->with('success', 'Data berhasil dihapus');
    }
}
