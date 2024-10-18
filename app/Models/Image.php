<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;

    public function project(): MorphTo
    {
        return $this->morphTo(Project::class);
    }

    public function client(): MorphTo
    {
        return $this->morphTo(Client::class);
    }
}
