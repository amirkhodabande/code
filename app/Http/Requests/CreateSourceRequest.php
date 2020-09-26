<?php

namespace App\Http\Requests;

use App\Source;
use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class CreateSourceRequest extends FormRequest
{
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
        return [];
    }

    public function storeSource()
    {
        $uploadedImage = $this->image;
        // Upload file
        $fileName =  Str::slug($this->title) . '.' . $uploadedImage->getClientOriginalExtension();
        $uploadedImage->storePubliclyAs('public/sources', $fileName);


        $series = Source::create([
            'title' => $this->title,
            'cat' => $this->cat,
            'image' => 'storage/sources/' . $fileName,
            'description' => $this->description,
            'file' => $this->file,
        ]);
        session()->flash('تبریک', 'منبع ساخته شد');
        return redirect()->refresh();
        // return redirect()->route('series.show', $series->slug);
    }
}
