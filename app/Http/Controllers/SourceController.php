<?php

namespace App\Http\Controllers;

use App\Source;
use Illuminate\Http\Request;

class SourceController extends Controller
{
    public function show(Source $source)
    {
        return view('source', compact('source'));
    }
}
