<?php

namespace App;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasColor;

enum ProjectType: int implements HasLabel, HasColor, HasIcon
{
    case MYSELF = 0;
    case SCHOOL = 1;
    case STAGE = 2;


    public function getLabel(): ?string
    {
        return match ($this) {
            self::MYSELF => 'Mijzelf',
            self::SCHOOL => 'School',
            self::STAGE => 'Stage',
        };
    }

    public function getColor(): ?string
    {
        return match ($this) {
            self::MYSELF => 'danger',
            self::SCHOOL => 'info',
            self::STAGE => 'success',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::MYSELF => 'heroicon-m-academic-cap',
            self::SCHOOL => 'heroicon-m-pencil',
            self::STAGE => 'heroicon-m-eye',
        };
    }
}
