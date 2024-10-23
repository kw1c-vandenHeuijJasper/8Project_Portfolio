<?php

namespace App\Models;


use App\Enums\ProjectType;
use App\Enums\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    /**
     * Scopes
     */
    public function scopeCompleted(Builder $query)
    {
        return $query->whereDoesntHave(
            'tasks',
            function ($query) {
                $query->whereIn('status', [Status::NOT_STARTED, Status::HALFWAY]);
            }
        );
    }

    /**
     * Casts
     */

    protected $casts = [
        'type' => ProjectType::class,
    ];

    /**
     * Returns the percentage of the total project completion amount
     *
     * @return Attribute
     */

    // public function completedCount()
    // {
    // return $this->completed()->count();
    // }

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

                return (int) $percentage;
            }
        );
    }

    public function firstImage()
    {
        return $this->images->first();
    }

    public function hasUncompletedTasks()
    {
        return
            $this
            ->tasks()
            ->where('status', '<>', 2)
            ->get()
            ->isEmpty();
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
