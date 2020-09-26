<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Lesson;
use App\Series;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function store(Series $series, Request $request)
    {
        $series->lessons()->create($request->all());
        return redirect()->back();
    }

    public function delete(Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->back();
    }
}
