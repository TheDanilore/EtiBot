<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $comment = new Comment();
        $comment->post_id = $post->id;
        $comment->user_id = auth()->id();
        $comment->body = $request->body;
        $comment->save();

        return redirect()->route('posts.show', $post);
    }
}
