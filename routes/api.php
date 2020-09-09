<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['api', 'auth', 'core'])
    ->namespace('LaravelEnso\PackagingUnits\Http\Controllers\Packaging')
    ->prefix('api/administration/packagingUnits')
    ->as('administration.packagingUnits.')
    ->group(function () {
        Route::get('create', 'Create')->name('create');
        Route::post('', 'Store')->name('store');
        Route::get('{packagingUnit}/edit', 'Edit')->name('edit');
        Route::patch('{packagingUnit}', 'Update')->name('update');
        Route::delete('{packagingUnit}', 'Destroy')->name('destroy');
        Route::get('initTable', 'InitTable')->name('initTable');
        Route::get('tableData', 'TableData')->name('tableData');
        Route::get('exportExcel', 'ExportExcel')->name('exportExcel');
        Route::get('options', 'Options')->name('options');
    });
