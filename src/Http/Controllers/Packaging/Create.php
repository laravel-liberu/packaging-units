<?php

namespace LaravelEnso\PackagingUnits\Http\Controllers\Packaging;

use Illuminate\Routing\Controller;
use LaravelEnso\PackagingUnits\Forms\Builders\PackagingUnit;

class Create extends Controller
{
    public function __invoke(PackagingUnit $form)
    {
        return ['form' => $form->create()];
    }
}
