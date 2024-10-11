<?php

namespace App\Models;

use App\Models\Task;
use App\ProjectType;
use App\Models\Image;
use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $casts = [
        'type' => ProjectType::class
    ];


    public function percentage(): Attribute
    {
        return Attribute::make(
            get: function () {
                $max_points = $this->tasks->count() * 2;

                $points = $this->tasks->map(function ($task) {
                    $task['points'] = $task->status->getPoints();
                    return $task;
                })->sum('points');

                $percentage = ($points / $max_points) * 100;

                return  (int) $percentage;
            }
        );
        // Project::get()->each(function ($project) {
        //     $max_points = $project->tasks->count() * 2;

        //     $points = $project->tasks->map(function ($task) {
        //         $task['points'] = $task->status->getPoints();
        //         return $task;
        //     })->sum('points');

        //     $percentage = ($points / $max_points) * 100;

        //     dump([
        //         $points . '/' . $max_points,
        //         (int) $percentage
        //     ]);
        // });
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
