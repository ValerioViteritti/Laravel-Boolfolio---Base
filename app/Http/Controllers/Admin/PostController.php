<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Functions\Helper;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'text' => 'required|string',
        'reading_time' => 'required|numeric',
    ]);

    $data = $request->all();
    $data['slug'] = Helper::generateSlug($data['title'], Post::class);

    // Crea il nuovo post con i dati e lo slug generato
    $new_post = Post::create($data);

    return redirect()->route('admin.posts.index', $new_post->id)->with('success', 'Post creato con successo');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('admin.posts.index')->with('Post {{$post->id}} eliminato con successo!');
    }
}
