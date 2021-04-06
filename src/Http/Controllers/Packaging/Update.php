<?php

namespace LaravelEnso\PackagingUnits\Http\Controllers\Packaging;

use Illuminate\Routing\Controller;
use LaravelEnso\PackagingUnits\Http\Requests\ValidatePackagingUnitRequest;
use LaravelEnso\PackagingUnits\Models\PackagingUnit;

class Update extends Controller
{
    public function __invoke(ValidatePackagingUnitRequest $request, PackagingUnit $packagingUnit)
    {
        $packagingUnit->update($request->validated());

        return ['message' => __('The packaging unit was successfully updated')];
    }
}
