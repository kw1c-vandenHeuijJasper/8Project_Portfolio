<?php

namespace App;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasColor;

enum ProjectType: int implements HasLabel, HasColor, HasIcon
{
    case SCHOOL = 0;
    case STAGE = 1;

    public function getLabel(): ?string
    {
        return match ($this) {
            self::SCHOOL => 'School',
            self::STAGE => 'Stage',
        };
    }

    public function getColor(): ?string
    {
        return match ($this) {
            self::SCHOOL => 'info',
            self::STAGE => 'success',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::SCHOOL => 'heroicon-m-pencil',
            self::STAGE => 'heroicon-m-eye',
        };
    }
}
