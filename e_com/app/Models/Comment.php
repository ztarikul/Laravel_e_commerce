<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\User;
use App\Models\Reply;
use App\Models\Customer;
class Comment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function post(){
        return $this->belongsTo(Post::class);
    }

 
    public function replies(){
        return $this->hasMany(Reply::class);
    }


    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
