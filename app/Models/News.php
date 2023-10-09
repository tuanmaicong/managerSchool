<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['subject','content','image','categories_id','sub_categories_id'];

    public function categories(){
        return $this->belongsTo(Categories::class,'categories_id');
    }
    public function sub_categories(){
        return $this->belongsTo(SubCategory::class,'sub_categories_id');
    }
}
