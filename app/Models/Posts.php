<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $table  = 'Posts';
    protected $primaryKey  = 'id';
    protected $fillable = ['Description','image','user_id'];
  

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function comments(){
        return $this->hasMany(comments::class)->latest();
    }

    public function Likes(){
        return $this->hasMany(Likes::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class,'post_categories','posts_id','categories_id');
    }
    
    public function scopeFilter($query, array $filters)
    {
        if ($filters['category'] ?? false) {
            $category= $filters['category'];
            $query->whereHas('categories', function ($query) use ($category) {
                $query->where('name', $category);
            });
        };
    }
}



