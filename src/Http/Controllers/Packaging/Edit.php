<?php

namespace LaravelEnso\PackagingUnits\Http\Controllers\Packaging;

use Illuminate\Routing\Controller;
use LaravelEnso\PackagingUnits\Forms\Builders\PackagingUnitForm;
use LaravelEnso\PackagingUnits\Models\PackagingUnit;

class Edit extends Controller
{
    public function __invoke(PackagingUnit $packagingUnit, PackagingUnitForm $form)
    {
        return ['form' => $form->edit($packagingUnit)];
    }
}
