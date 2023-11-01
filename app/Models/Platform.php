<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Platform extends Model
{
    use HasFactory;

    public function games(): BelongsToMany {
        return $this->belongsToMany(Game::class);
    }

    protected $table = "platforms";

    protected $primaryKey = 'platform_id';

    protected $attributes = 'name';
}
