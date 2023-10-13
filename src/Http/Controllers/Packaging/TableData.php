<?php

namespace LaravelLiberu\PackagingUnits\Http\Controllers\Packaging;

use Illuminate\Routing\Controller;
use LaravelLiberu\PackagingUnits\Tables\Builders\PackagingUnit;
use LaravelLiberu\Tables\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected string $tableClass = PackagingUnit::class;
}
