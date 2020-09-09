<?php

namespace LaravelEnso\PackagingUnits\Http\Controllers\Packaging;

use LaravelEnso\PackagingUnits\Models\PackagingUnit;
use Illuminate\Routing\Controller;
use LaravelEnso\PackagingUnits\Http\Requests\ValidatePackagingUnitRequest;

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
