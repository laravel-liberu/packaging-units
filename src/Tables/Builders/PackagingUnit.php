<?php

namespace LaravelEnso\PackagingUnits\Tables\Builders;

use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\PackagingUnits\Models\PackagingUnit as Model;
use LaravelEnso\Tables\Contracts\Table;

class PackagingUnit implements Table
{
    private const TemplatePath = __DIR__.'/../Templates/packagingUnits.json';

    public function query(): Builder
    {
        return Model::selectRaw('id, name, description, created_at');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
