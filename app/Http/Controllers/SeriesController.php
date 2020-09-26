<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function show(Series $series)
    {
        return view('series', compact('series'));
    }

    public function lessonShow(Lesson $lesson)
    {
        return view('lesson', compact('lesson'));
    }
}
