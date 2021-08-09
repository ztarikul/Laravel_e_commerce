<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductReview;
use App\Models\QueAndAns;
class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function product_reviews(){
        return $this->hasMany(ProductReview::class);
    }
    public function questionandanswers(){
        return $this->hasMany(QueAndAns::class);
    }
}
