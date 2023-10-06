<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $fillable = ['name','avatar','email','password','id_classrooms','birthday'];

    public function classrooms(){
        return $this->belongsTo(Classrooms::class,'id_classrooms');
    }
}
