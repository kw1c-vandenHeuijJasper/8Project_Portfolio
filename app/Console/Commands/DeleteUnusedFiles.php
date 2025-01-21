<?php

namespace App\Console\Commands;

use App\Models\Image;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class DeleteUnusedFiles extends Command
{
    protected $signature = 'files:delete-unused';

    protected $description = 'Deletes unused files, which are not declared in the database';

    public function handle(): void
    {
        $images = Image::pluck('path')->toArray();
        $files = Storage::disk('public')->allFiles();

        if ($files !== [0 => '.gitignore']) {
            collect(Storage::disk('public')->allFiles())
                ->reject(fn (string $filePath) => $filePath === '.gitignore' || in_array($filePath, $images))
                ->each(fn (string $filePath) => Storage::disk('public')->delete($filePath));
        }
    }
}
