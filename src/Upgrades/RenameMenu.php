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
        return Menu::whereName('packaging units')->exists();
    }

    public function migrateData(): void
    {
        Menu::whereName('packaging unit')->update([
            'name' => 'Packaging Units'
        ]);
    }
}
