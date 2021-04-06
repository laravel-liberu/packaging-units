<?php

namespace LaravelEnso\PackagingUnits\Http\Controllers\Packaging;

use Illuminate\Routing\Controller;
use LaravelEnso\PackagingUnits\Tables\Builders\PackagingUnitTable;
use LaravelEnso\Tables\Traits\Excel;

class ExportExcel extends Controller
{
    use Excel;

    protected string $tableClass = PackagingUnitTable::class;
}
