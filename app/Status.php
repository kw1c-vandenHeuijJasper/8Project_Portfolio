<?php

namespace App;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum Status: int implements HasLabel, HasColor, HasIcon
{
    case NOT_STARTED = 0;
    case HALFWAY = 1;
    case DONE = 2;

    public function getPoints()
    {
        return match ($this) {
            self::NOT_STARTED => 0,
            self::HALFWAY => 1,
            self::DONE => 2,
        };
    }

    public function getLabel(): ?string
    {
        return match ($this) {
            self::NOT_STARTED => 'Not Started',
            self::HALFWAY => 'Halfway',
            self::DONE => 'Done',
        };
    }

    public function getColor(): ?string
    {
        return match ($this) {
            self::NOT_STARTED => 'danger',
            self::HALFWAY => 'info',
            self::DONE => 'success',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::NOT_STARTED => 'heroicon-m-exclamation-circle',
            self::HALFWAY => 'heroicon-m-code-bracket',
            self::DONE => 'heroicon-m-flag',
        };
    }
}
