<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;
    // public function getCategory(){
    //     return Category::find($this->category_id);    
    // }
    protected $fillable = ['code', 'name', 'description', 'image', 'price', 'category_id'];
    public function category(){
        
        return $this->belongsTo(Category::class); 
    }

    public function getPriceForCount($count){
            return $this->price * $count ; 
    }
    
}
