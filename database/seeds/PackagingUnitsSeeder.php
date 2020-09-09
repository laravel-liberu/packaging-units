<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use LaravelEnso\PackagingUnits\Models\PackagingUnit;

class PackagingUnitsSeeder extends Seeder
{
    private const Units = [
        ['name' => 'it', 'description' => 'item'],
    ];

    public function run()
    {
        (new Collection(self::Units))
            ->each(fn ($units) => factory(PackagingUnit::class)->create($units));
    }
}
