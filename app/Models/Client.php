<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Client extends Model
{
    use HasFactory;

    public function firstImage()
    {
        return $this->images->first();
    }

    public function projectCount(): Int
    {
        return $this->project()->count();
    }

    public function project(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
