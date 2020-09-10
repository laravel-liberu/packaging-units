<?php

namespace LaravelEnso\PackagingUnits\Upgrades;

use Illuminate\Support\Facades\Artisan;
use LaravelEnso\PackagingUnits\Models\PackagingUnit;
use LaravelEnso\Upgrade\Contracts\MigratesData;
use LaravelEnso\Upgrade\Contracts\Prioritization;

class Initialize implements MigratesData, Prioritization
{
    public function isMigrated(): bool
    {
        return PackagingUnit::exists();
    }

    public function migrateData(): void
    {
        Artisan::call('db:seed', [
            '--class' => 'PackagingUnitsSeeder',
        ]);
    }

    public function priority(): int
    {
        return 0;
    }
}
