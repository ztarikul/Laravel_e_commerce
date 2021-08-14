<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductReview;
use App\Models\QueAndAns;
use App\Models\Comment;
class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function product_reviews(){
        return $this->hasMany(ProductReview::class);
    }
    public function question_answers(){
        return $this->hasMany(QueAndAns::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
