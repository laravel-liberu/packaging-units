<?php

namespace LaravelEnso\PackagingUnits\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaravelEnso\PackagingUnits\Models\PackagingUnit;

class PackagingUnitFactory extends Factory
{
    protected $model = PackagingUnit::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word,
            'description' => $this->faker->sentence,
        ];
    }
}
