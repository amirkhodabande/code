<?php

namespace App\Http\Controllers;

use App\Blogs;
use App\Series;
use App\Source;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $sources = Source::all();
        // $blogs = Blogs::orderBy('created_at', 'desc')->paginate(1);
        return view('index', compact('sources', 'blogs'));
    }
    public function series()
    {
        return $series = Series::paginate(3);
    }
    public function blogs()
    {
        return $blogs = Blogs::where('status', 'act')->orderBy('created_at', 'desc')->paginate(6);
    }
}
