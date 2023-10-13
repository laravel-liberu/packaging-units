<?php

namespace LaravelLiberu\PackagingUnits\Http\Controllers\Packaging;

use Illuminate\Routing\Controller;
use LaravelLiberu\PackagingUnits\Forms\Builders\PackagingUnit;
use LaravelLiberu\PackagingUnits\Models\PackagingUnit as Model;

class Edit extends Controller
{
    public function __invoke(Model $packagingUnit, PackagingUnit $form)
    {
        return ['form' => $form->edit($packagingUnit)];
    }
}
