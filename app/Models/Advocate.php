<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Advocate extends Model
{
    //
    // using #[fillable ] Fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'email',
        'phone',
        'slug',
        'image',
        'qualifications',
        'content',
        'role',
        'user_id',
       
    ];

    // relationship with user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
