<?php

namespace App\Models;

use App\Models\blogs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class blogs_category extends Model
{
    use HasFactory;

    public function blogs(){
        return $this->hasMany(blogs::class , 'blog_category');
    }
}
