<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class SeriesRequest extends FormRequest
{
    public function uploadSeriesImage()
    {
        // $title = $request->title;
        $uploadedImage = $this->image;
        // Upload file
        $this->fileName =  Str::slug($this->title) . '.' . $uploadedImage->getClientOriginalExtension();
        $uploadedImage->storePubliclyAs('public/series', $this->fileName);

        return $this;
    }
}
