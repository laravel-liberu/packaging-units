<?php

namespace LaravelEnso\PackagingUnits\Http\Controllers\Packaging;

use Illuminate\Routing\Controller;
use LaravelEnso\PackagingUnits\Forms\Builders\PackagingUnitForm;

class Create extends Controller
{
    public function __invoke(PackagingUnitForm $form)
    {
        return ['form' => $form->create()];
    }
}
