<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Review extends Model
{
    use HasFactory;

    protected $table = "reviews";

    protected $primaryKey = ['user_email','game_id'];

    protected $attributes = [
        'rating',
        'description'
    ];

    protected $casts = [
        'review_created_on' => 'datetime',
        'last_edited' => 'datetime',
    ];

}
