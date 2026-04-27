<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    // relationship with user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
}
