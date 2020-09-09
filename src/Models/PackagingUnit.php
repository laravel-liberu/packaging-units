<?php

namespace LaravelEnso\PackagingUnits\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Helpers\Traits\AvoidsDeletionConflicts;
use LaravelEnso\Rememberable\Traits\Rememberable;
use LaravelEnso\Tables\Traits\TableCache;

class PackagingUnit extends Model
{
    use AvoidsDeletionConflicts, Rememberable, TableCache;

    protected $guarded = ['id'];
}
