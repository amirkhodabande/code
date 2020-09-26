<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSourceRequest;
use App\Source;
use Illuminate\Http\Request;

class SourceController extends Controller
{
    public function create()
    {
        if (Source::all()->count() > 0)
            $source = Source::all();

        return view('admin.sources.create', compact('source'));
    }
    public function store(CreateSourceRequest $request)
    {
        // We Cut all the functionality to the 'CreateSeriesRequest'
        return $request->storeSource();
    }
}
