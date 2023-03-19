<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table  = 'categories';
    protected $primaryKey  = 'id';
    public function Posts(){
        return $this->belongsToMany(Category::class,'post_categories','posts_id','categories_id');
    }
}
