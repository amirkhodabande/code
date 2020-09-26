<?php

namespace App\Http\Requests;

use App\Series;
use Illuminate\Support\Str;

class CreateSeriesRequest extends SeriesRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image'
        ];
    }

    public function storeSeries()
    {
        $title = $this->title;
        $series = Series::create([
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->description,
            'image' => 'storage/series/' . $this->fileName,
        ]);
        session()->flash('تبریک', 'دوره ساخته شد');
        return redirect('/');
        // return redirect()->route('series.show', $series->slug);
    }
}
