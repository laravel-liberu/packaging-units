<?php

namespace LaravelLiberu\PackagingUnits\Http\Controllers\Packaging;

use Illuminate\Routing\Controller;
use LaravelLiberu\PackagingUnits\Http\Requests\ValidatePackagingUnit;
use LaravelLiberu\PackagingUnits\Models\PackagingUnit;

class Store extends Controller
{
    public function __invoke(ValidatePackagingUnit $request, PackagingUnit $packagingUnit)
    {
        $packagingUnit->fill($request->validated())->save();

        return [
            'message' => __('The packaging unit was successfully created'),
            'redirect' => 'administration.packagingUnits.edit',
            'param' => ['packagingUnit' => $packagingUnit->id],
        ];
    }
}
