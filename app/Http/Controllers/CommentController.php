<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        $validatedData = $request->validate([
            'comment' => 'required|string',
        ]);

        $post = Post::findOrFail($postId);

        $comment = new Comment([
            'user_id' => $request->user()->id,
            'comment' => $validatedData['comment'],
        ]);

        $post->comments()->save($comment);

        return response()->json($comment, 201);
    }
}
