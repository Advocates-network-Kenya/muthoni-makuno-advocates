<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Areaoflaw extends Model
{
    //
    // using #[fillable ] Fillable attributes for mass assignment
    protected $fillable = [
        'title',
        'description',
        'image',
        'user_id',
        'content',
        'slug',
    ];
    
}
