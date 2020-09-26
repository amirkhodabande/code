<?php

namespace App\Http\Controllers;

use App\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function show(Blogs $blogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogs $blogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogs $panel_blog)
    {
        $user = auth()->user()->emailslug;
        // dd($panel_blog->status);
        // $data = $request->all();
        $panel_blog->update(['status' => $request->status, 'image' => $request->image]);
        return redirect("/panel/$user/?ad");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogs $blogs)
    {
        //
    }
}
