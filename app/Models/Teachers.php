<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','avatar','password','birthday','address','status','subjects_id'];

    public function subjects(){
        return $this->belongsTo(Subjects::class);
    }
}
