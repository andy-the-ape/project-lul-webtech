<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    use HasFactory;

    public function reviews(): HasMany {
        return $this->hasMany(Review::class);
    }

    public function studios(): BelongsToMany {
        return $this->belongsToMany(Studio::class);
    }

    public function platforms(): BelongsToMany {
        return $this->belongsToMany(Platform::class);
    }

    protected $table = "games";

    protected $primaryKey = 'game_id';

    protected $attributes = [
        'name',
        'description',
        'aggregate_rating',
        'release_date'
    ];

}
