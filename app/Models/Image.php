<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
