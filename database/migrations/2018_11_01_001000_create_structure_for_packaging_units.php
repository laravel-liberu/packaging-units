<?php

use LaravelEnso\Migrator\Database\Migration;

class CreateStructureForPackagingUnits extends Migration
{
    protected array $permissions = [
        ['name' => 'administration.packagingUnits.index', 'description' => 'Show index for packaging units', 'is_default' => false],

        ['name' => 'administration.packagingUnits.create', 'description' => 'Create packaging unit', 'is_default' => false],
        ['name' => 'administration.packagingUnits.store', 'description' => 'Store a new packaging unit', 'is_default' => false],
        ['name' => 'administration.packagingUnits.show', 'description' => 'Show packaging unit', 'is_default' => false],
        ['name' => 'administration.packagingUnits.edit', 'description' => 'Edit packaging unit', 'is_default' => false],
        ['name' => 'administration.packagingUnits.update', 'description' => 'Update packaging unit', 'is_default' => false],
        ['name' => 'administration.packagingUnits.destroy', 'description' => 'Delete packaging unit', 'is_default' => false],
        ['name' => 'administration.packagingUnits.initTable', 'description' => 'Init table for packaging units', 'is_default' => false],

        ['name' => 'administration.packagingUnits.tableData', 'description' => 'Get table data for packaging units', 'is_default' => false],

        ['name' => 'administration.packagingUnits.exportExcel', 'description' => 'Export excel for packaging units', 'is_default' => false],

        ['name' => 'administration.packagingUnits.options', 'description' => 'Get packaging unit options for select', 'is_default' => false],
    ];

    protected array $menu = [
        'name' => 'Packaging Units', 'icon' => 'archive', 'route' => 'administration.packagingUnits.index', 'order_index' => 100, 'has_children' => false,
    ];

    protected ?string $parentMenu = 'Administration';
}
