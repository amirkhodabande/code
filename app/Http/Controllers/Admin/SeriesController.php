<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSeriesRequest;
use App\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function create()
    {
        if (Series::all()->count() > 0)
            $series = Series::all();
        return view('admin.series.create', compact('series'));
    }
    public function store(CreateSeriesRequest $request)
    {
        // We Cut all the functionality to the 'CreateSeriesRequest'
        return $request->uploadSeriesImage()
            ->storeSeries();
    }

    public function show(Series $series)
    {
        return view('admin.series.show', compact('series'));
    }
}
