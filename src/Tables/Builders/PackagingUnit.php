<?php

namespace LaravelLiberu\PackagingUnits\Tables\Builders;

use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\PackagingUnits\Models\PackagingUnit as Model;
use LaravelLiberu\Tables\Contracts\Table;

class PackagingUnit implements Table
{
    private const TemplatePath = __DIR__.'/../Templates/packagingUnits.json';

    public function query(): Builder
    {
        return Model::selectRaw('id, name, description, created_at');
    }

    public function templatePath(): string
    {
        return self::TemplatePath;
    }
}
