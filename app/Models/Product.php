<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\tags_product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category(){
        return $this->BelongsToMany(Category::class,'product_categories');
    }
    public function tag(){
        return $this->belongsToMany(Tag::class,'product_tags');
    }
    public function tags(){
        return $this->BelongsToMany(Tag::class,'tags','id');
    }
}
