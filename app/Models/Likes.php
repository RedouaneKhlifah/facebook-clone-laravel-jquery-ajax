<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    use HasFactory;
    protected $table  = 'likes';
    protected $primaryKey  = 'id';
    protected $fillable = ['user_id','posts_id'];

    public function Posts(){
        return $this->belongsTo(Posts::class);
    }
    public function user(){
        return $this->belongsTo(user::class,'user_id');
    }
    

    
}
