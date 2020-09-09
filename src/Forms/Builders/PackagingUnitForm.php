<?php

namespace LaravelEnso\PackagingUnits\Forms\Builders;

use LaravelEnso\PackagingUnits\Models\PackagingUnit;
use LaravelEnso\Forms\Services\Form;

class PackagingUnitForm
{
    protected const TemplatePath = __DIR__.'/../Templates/packagingUnit.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(PackagingUnit $packagingUnit)
    {
        return $this->form->edit($packagingUnit);
    }
}
