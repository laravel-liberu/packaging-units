<?php

namespace LaravelLiberu\PackagingUnits\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaravelLiberu\PackagingUnits\Models\PackagingUnit;

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
