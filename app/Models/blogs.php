<?php

namespace App\Models;

use App\Models\User;
use App\Models\comments;
use App\Models\blogs_category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class blogs extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $dates = ['deleted_at'];

    public function blogs_category(){
        return $this->belongsTo(blogs_category::class , 'blog_category');
    }

    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }


    public function comments(){
        return $this->hasMany(comments::class , 'blog_id');
    }


}
