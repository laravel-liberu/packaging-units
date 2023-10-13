<?php

namespace LaravelLiberu\PackagingUnits\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use LaravelLiberu\Helpers\Traits\AvoidsDeletionConflicts;
use LaravelLiberu\Rememberable\Traits\Rememberable;
use LaravelLiberu\Tables\Traits\TableCache;

class PackagingUnit extends Model
{
    use AvoidsDeletionConflicts, HasFactory, Rememberable, TableCache;

    protected $guarded = ['id'];

    protected array $rememberableKeys = ['id', 'name'];
}
