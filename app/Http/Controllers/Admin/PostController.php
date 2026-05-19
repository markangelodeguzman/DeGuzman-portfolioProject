<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = 'storage/' . $request->file('image')->store('posts', 'public');
        }
        Post::create($data);
        return redirect()->back()->with('success', 'Post added successfully');
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete(str_replace('storage/', '', $post->image));
            }
            $data['image'] = 'storage/' . $request->file('image')->store('posts', 'public');
        }
        $post->update($data);
        return redirect()->back()->with('success', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::disk('public')->delete(str_replace('storage/', '', $post->image));
        }
        $post->delete();
        return redirect()->back()->with('success', 'Post deleted successfully');
    }
}
