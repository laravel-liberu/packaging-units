<?php

namespace LaravelLiberu\PackagingUnits\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use LaravelLiberu\PackagingUnits\Models\PackagingUnit;

class PackagingUnitsSeeder extends Seeder
{
    private const Units = [
        ['name' => 'it', 'description' => 'item'],
    ];

    public function run()
    {
        Collection::wrap(self::Units)
            ->each(fn ($units) => PackagingUnit::factory()->create($units));
    }
}
