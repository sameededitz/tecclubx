<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $blogs = Post::all();
        return view('admin.all-blogs', compact('blogs'));
    }

    public function create()
    {
        return view('admin.add-blog');
    }

    public function view(Post $post)
    {
        return view('admin.view-blog', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('admin.edit-blog', compact('post'));
    }

    public function destroy(Post $post)
    {
        $post->clearMediaCollection('thumbnail');
        $post->delete();

        return redirect()->route('all-blogs')->with([
            'status' => 'success',
            'message' => 'Blog deleted successfully'
        ]);
    }

    public function updateStatus(Request $request, Post $post)
    {
        $isPublished = $request->input('is_published');
        $post->update([
            'is_published' => $isPublished,
            'published_at' => $isPublished ? now() : null
        ]);
        return response()->json(['success' => true]);
    }
}
