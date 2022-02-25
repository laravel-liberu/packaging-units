<?php

namespace LaravelEnso\PackagingUnits\Http\Controllers\Packaging;

use Illuminate\Routing\Controller;
use LaravelEnso\PackagingUnits\Forms\Builders\PackagingUnit;
use LaravelEnso\PackagingUnits\Models\PackagingUnit as Model;

class Edit extends Controller
{
    public function __invoke(Model $packagingUnit, PackagingUnit $form)
    {
        return ['form' => $form->edit($packagingUnit)];
    }
}
