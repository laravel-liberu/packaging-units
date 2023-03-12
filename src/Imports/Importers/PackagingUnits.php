<?php

namespace LaravelEnso\PackagingUnits\Imports\Importers;

use LaravelEnso\DataImport\Contracts\Importable;
use LaravelEnso\DataImport\Models\Import;
use LaravelEnso\Helpers\Services\Obj;
use LaravelEnso\PackagingUnits\Models\PackagingUnit;

class PackagingUnits implements Importable
{
    public function run(Obj $row, Import $import)
    {
        PackagingUnit::create($row->toArray());
    }
}
