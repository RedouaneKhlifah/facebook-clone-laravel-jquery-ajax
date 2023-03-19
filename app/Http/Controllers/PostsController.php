<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;

use App\Models\Category;
use App\Models\comments;
use Illuminate\Http\Request;
use App\Models\Posts;
use Psy\Exception\BreakException;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
   

    public function index()
    {
        
        
        $posts = Posts::with('user','comments','Likes.Posts','categories')->latest()->filter(request(['category']))->get();
        $category = Category::get();
        // dd($posts);

         foreach( $posts as $post) {
            
            $liked  = $post->likes->where('user_id', auth()->id())->count() > 0 ;
            $likes_count  = count($post->likes);
            $comments_count = count($post->comments);




            $post->likes->liked = $liked;
            $post->likes->count = $likes_count;
            $post->comments->count = $comments_count;



            // $post->category->categ
            // post->categories->type = 
         }


       
        

     

       
        
       return view('facebook',[
        'posts'=>$posts,
        'Categories'=>$category
    ]);
    }

    // public function filter($category)
    // {
        
        
    //     $posts = Posts::with('user','comments','Likes.Posts','categories')->get();

        
        
    //      foreach( $posts as $post) {
            
    //         $liked  = $post->likes->where('user_id', auth()->id())->count() > 0 ;
    //         $post->likes->liked = $liked;
            
            
           
    //      }

    //    return view('facebook',[
    //     'posts'=>$posts,
    // ]);
    // }



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
       
        // $input  = $request->all();
        // if($image = $request->file('image')){
        //     $title = date('Ymdhis') .'.'. $image->getClientOriginalExtension();
        //     $image->move(public_path('img') ,$title);
        //     $input['image'] = $title;
        // }
        // Posts::create($input);
        // return back();

        $input  = $request->all();
      
        if(!array_key_exists('category', $input)){
            $input = array_merge($input, ['category' => '4']);
        }
        $post= new Posts();
        $post->Description = $input['Description'];
        $post->user_id = $input['user_id'];
      
         if($image = $request->file('image')){
            $title = date('Ymdhis') .'.'. $image->getClientOriginalExtension();
            $image->move(public_path('img') ,$title);
            $input['image'] = $title;
            $post->image = $input['image'];
        }

        $post->save();
        
        
        $post->categories()->attach($input['category']);

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
