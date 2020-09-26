<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Lesson;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Lesson $lesson)
    {
        return $lesson->comments()->paginate(5);
    }

    public function show(Comment $comment)
    {
        return $comment->replies()->paginate(10);
    }

    public function store(Request $request, Lesson $lesson)
    {
        return auth()->user()->comments()->create([
            'lesson_id' => $lesson->id,
            'body' => $request->body,
            'comment_id' => $request->comment_id,
        ])->fresh();
    }
}
