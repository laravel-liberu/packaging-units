<?php

use Faker\Generator as Faker;
use LaravelEnso\PackagingUnits\Models\PackagingUnit;

$factory->define(PackagingUnit::class, fn (Faker $faker) => [
    'name' => $faker->unique()->word,
    'description' => $faker->sentence,
]);
