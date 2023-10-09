<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ['name','url','describe'];

    public function subcategory(){
        return $this->hasMany(SubCategory::class);
    }
}
