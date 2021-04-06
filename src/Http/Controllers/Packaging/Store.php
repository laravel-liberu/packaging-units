<?php

namespace LaravelEnso\PackagingUnits\Http\Controllers\Packaging;

use Illuminate\Routing\Controller;
use LaravelEnso\PackagingUnits\Http\Requests\ValidatePackagingUnitRequest;
use LaravelEnso\PackagingUnits\Models\PackagingUnit;

class Store extends Controller
{
    public function __invoke(ValidatePackagingUnitRequest $request, PackagingUnit $packagingUnit)
    {
        $packagingUnit->fill($request->validated())->save();

        return [
            'message' => __('The packaging unit was successfully created'),
            'redirect' => 'administration.packagingUnits.edit',
            'param' => ['packagingUnit' => $packagingUnit->id],
        ];
    }
}
