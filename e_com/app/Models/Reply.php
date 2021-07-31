<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;

class Reply extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function comment(){
        return $this->belongsTo(Comment::class);
    }
}
