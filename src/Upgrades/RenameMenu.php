<?php

namespace LaravelEnso\PackagingUnits\Upgrades;

use Illuminate\Support\Facades\Artisan;
use LaravelEnso\Menus\Models\Menu;
use LaravelEnso\PackagingUnits\Models\PackagingUnit;
use LaravelEnso\Upgrade\Contracts\MigratesData;
use LaravelEnso\Upgrade\Contracts\Prioritization;

class RenameMenu implements MigratesData
{
    public function isMigrated(): bool
    {
        return Menu::whereName('Packaging Units')->exists();
    }

    public function migrateData(): void
    {
        Menu::whereName('Packaging Unit')->update([
            'name' => 'Packaging Units'
        ]);
    }
}
