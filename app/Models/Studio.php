<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Studio extends Model
{
    use HasFactory;

    public function games(): BelongsToMany {
        return $this->belongsToMany(Game::class);
    }

    protected $table = "studios";

    protected $primaryKey = 'studio_id';

    protected $attributes = 'name';
}
