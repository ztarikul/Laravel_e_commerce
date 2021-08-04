<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductReview;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function reviews(){
       
        return $this->hasMany(ProductReview::class);
    }
}
