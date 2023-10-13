<?php

namespace LaravelLiberu\PackagingUnits\Http\Controllers\Packaging;

use Illuminate\Routing\Controller;
use LaravelLiberu\PackagingUnits\Http\Requests\ValidatePackagingUnit;
use LaravelLiberu\PackagingUnits\Models\PackagingUnit;

class Update extends Controller
{
    public function __invoke(ValidatePackagingUnit $request, PackagingUnit $packagingUnit)
    {
        $packagingUnit->update($request->validated());

        return ['message' => __('The packaging unit was successfully updated')];
    }
}
