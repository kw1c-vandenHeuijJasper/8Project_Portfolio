<?php

use App\Console\Commands\DeleteUnusedFiles;
use Illuminate\Support\Facades\Schedule;

Schedule::command(DeleteUnusedFiles::class)->everyFiveMinutes();
