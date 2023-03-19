<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Models\Post_popup;
use App\Models\Posts;
use Illuminate\Http\Request;


class commentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $input = $request->all();
        comments::create($input);

        $newcomment = comments::latest()->with('user')->first();
        return response()->json([
            'status' => 200,
            'post' => $newcomment
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Posts::with('user','comments.user')->find($id);
        // $post->comments = $post->comments->sortByDesc('id');
        
        return response()->json([
            'status' => 200,
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
