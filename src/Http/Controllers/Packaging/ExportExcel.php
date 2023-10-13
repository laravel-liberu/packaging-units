<?php

namespace LaravelLiberu\PackagingUnits\Http\Controllers\Packaging;

use Illuminate\Routing\Controller;
use LaravelLiberu\PackagingUnits\Tables\Builders\PackagingUnit;
use LaravelLiberu\Tables\Traits\Excel;

class ExportExcel extends Controller
{
    use Excel;

    protected string $tableClass = PackagingUnit::class;
}
