<?php

namespace LaravelEnso\PackagingUnits\Http\Controllers\Packaging;

use Illuminate\Routing\Controller;
use LaravelEnso\PackagingUnits\Models\PackagingUnit;

class Destroy extends Controller
{
    public function __invoke(PackagingUnit $packagingUnit)
    {
        $packagingUnit->delete();

        return [
            'message' => __('The packaging unit was successfully deleted'),
            'redirect' => 'administration.packagingUnits.index',
        ];
    }
}
