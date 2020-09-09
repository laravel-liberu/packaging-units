<?php

namespace LaravelEnso\PackagingUnits\Http\Controllers\Packaging;

use LaravelEnso\PackagingUnits\Models\PackagingUnit;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use LaravelEnso\Select\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected string $model = PackagingUnit::class;
}
