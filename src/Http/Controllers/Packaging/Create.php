<?php

namespace LaravelLiberu\PackagingUnits\Http\Controllers\Packaging;

use Illuminate\Routing\Controller;
use LaravelLiberu\PackagingUnits\Forms\Builders\PackagingUnit;

class Create extends Controller
{
    public function __invoke(PackagingUnit $form)
    {
        return ['form' => $form->create()];
    }
}
