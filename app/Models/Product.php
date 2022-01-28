<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $guarded = [];


    public function relationToCategory(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }


    public function relationToSubCategory(){
        return $this->hasOne(SubCategory::class, 'id', 'sub_category_id');
    }
}
