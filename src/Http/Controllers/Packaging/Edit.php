<?php

namespace LaravelEnso\PackagingUnits\Http\Controllers\Packaging;

use LaravelEnso\PackagingUnits\Models\PackagingUnit;
use Illuminate\Routing\Controller;
use LaravelEnso\PackagingUnits\Forms\Builders\PackagingUnitForm;

class Edit extends Controller
{
    public function __invoke(PackagingUnit $packagingUnit, PackagingUnitForm $form)
    {
        return ['form' => $form->edit($packagingUnit)];
    }
}
