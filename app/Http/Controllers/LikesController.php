<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Models\Likes;
use App\Models\Posts;
use Illuminate\Http\Request;


class LikesController extends Controller
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
       
        $input = $request->all(); 

        $existingLike = Likes::where('user_id', $input['user_id'])
        ->where('posts_id', $input['posts_id'])
        ->first();

        // If a matching record is found, return an error response
        if ($existingLike) {
            $existingLike->delete();
        return response()->json(['error' => 'Record already exists'], 400);
        }
        
        $like  = Likes::create($input);
        return response()->json(['id' => $like], 200);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Posts::with('user','comments.user')->find($id);
        

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