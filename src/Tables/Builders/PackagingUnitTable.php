<?php

namespace LaravelEnso\PackagingUnits\Tables\Builders;

use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\PackagingUnits\Models\PackagingUnit;
use LaravelEnso\Tables\Contracts\Table;

class PackagingUnitTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/packagingUnits.json';

    public function query(): Builder
    {
        return PackagingUnit::selectRaw('id, name, description, created_at');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
