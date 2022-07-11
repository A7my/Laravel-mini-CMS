<?php

namespace App\Models;

use App\Models\User;
use App\Models\blogs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class comments extends Model
{
    use HasFactory;

    public function blog(){
        return $this->belongsTo(blogs::class ,'blog_id');
    }

    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }
}
