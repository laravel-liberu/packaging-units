<?php

namespace LaravelEnso\PackagingUnits\Http\Controllers\Packaging;

use LaravelEnso\PackagingUnits\Tables\Builders\PackagingUnitTable;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected string $tableClass = PackagingUnitTable::class;
}
