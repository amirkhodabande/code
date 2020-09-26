<?php

namespace App\Http\Controllers;

use App\Blogs;
use App\Lesson;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $panel)
    {
        $allBlogs = Blogs::orderBy('status', 'desc')->get();
        $lessons = Lesson::all();
        return view('panel', compact('panel', 'lessons', 'allBlogs'));
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required|min:3',
            'description' => 'required|min:20|max:254',
            'url' => 'required|min:5'
        ]);
        $user = auth()->user();

        Blogs::create([
            'user_id' => $user->id,
            'title' => $request->title,
            'description' => $request->description,
            'url' => $request->url
        ]);
        // dd($a);
        return redirect("panel/$user->emailslug/?b");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $panel)
    {
        $this->validate(request(), [
            'name' => 'required|min:3',
        ]);
        // $data = $request->all();
        $panel->update(['name' => $request->name]);
        return redirect()->refresh();
    }
}
