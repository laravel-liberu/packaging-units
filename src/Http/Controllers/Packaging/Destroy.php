<?php

namespace LaravelLiberu\PackagingUnits\Http\Controllers\Packaging;

use Illuminate\Routing\Controller;
use LaravelLiberu\PackagingUnits\Models\PackagingUnit;

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
