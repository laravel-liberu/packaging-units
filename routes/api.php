<?php

use Illuminate\Support\Facades\Route;
use LaravelLiberu\PackagingUnits\Http\Controllers\Packaging\Create;
use LaravelLiberu\PackagingUnits\Http\Controllers\Packaging\Destroy;
use LaravelLiberu\PackagingUnits\Http\Controllers\Packaging\Edit;
use LaravelLiberu\PackagingUnits\Http\Controllers\Packaging\ExportExcel;
use LaravelLiberu\PackagingUnits\Http\Controllers\Packaging\InitTable;
use LaravelLiberu\PackagingUnits\Http\Controllers\Packaging\Options;
use LaravelLiberu\PackagingUnits\Http\Controllers\Packaging\Store;
use LaravelLiberu\PackagingUnits\Http\Controllers\Packaging\TableData;
use LaravelLiberu\PackagingUnits\Http\Controllers\Packaging\Update;

Route::middleware(['api', 'auth', 'core'])
    ->prefix('api/administration/packagingUnits')
    ->as('administration.packagingUnits.')
    ->group(function () {
        Route::get('create', Create::class)->name('create');
        Route::post('', Store::class)->name('store');
        Route::get('{packagingUnit}/edit', Edit::class)->name('edit');
        Route::patch('{packagingUnit}', Update::class)->name('update');
        Route::delete('{packagingUnit}', Destroy::class)->name('destroy');
        Route::get('initTable', InitTable::class)->name('initTable');
        Route::get('tableData', TableData::class)->name('tableData');
        Route::get('exportExcel', ExportExcel::class)->name('exportExcel');
        Route::get('options', Options::class)->name('options');
    });
