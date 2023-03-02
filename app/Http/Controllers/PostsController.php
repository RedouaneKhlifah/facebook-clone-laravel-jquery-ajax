<?php

namespace App\Http\Controllers;

use App\Models\comments;
use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Posts::with('user','comments')->get();
       
     
       return view('facebook')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $input  = $request->all();
        if($image = $request->file('image')){
            $title = date('Ymdhis') .'.'. $image->getClientOriginalExtension();
            $image->move(public_path('img') ,$title);
            $input['image'] = $title;
        }
        Posts::create($input);
        return back();
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
