<?php

namespace App\Models;

use App\Models\Task;
use App\Models\Client;
use App\Models\Image;
use App\ProjectType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Project extends Model
{
    use HasFactory;

    protected $casts = [
        'type' => ProjectType::class
    ];


    public function percentage()
    {
        Project::get()->each(function ($project) {
            $max_points = $project->tasks->count() * 2;

            $points = $project->tasks->map(function ($task) {
                $task['points'] = $task->status->getPoints();
                return $task;
            })->sum('points');

            $percentage = ($points / $max_points) * 100;

            dump([
                $points . '/' . $max_points,
                (int) $percentage
            ]);
        });
    }


    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class)
            ->withDefault([
                'name' => 'Mijzelf'
            ]);
    }

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
