<?php

namespace LaravelLiberu\PackagingUnits\Forms\Builders;

use LaravelLiberu\Forms\Services\Form;
use LaravelLiberu\PackagingUnits\Models\PackagingUnit as Model;

class PackagingUnit
{
    private const TemplatePath = __DIR__.'/../Templates/packagingUnit.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form($this->templatePath());
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Model $packagingUnit)
    {
        return $this->form->edit($packagingUnit);
    }

    protected function templatePath(): string
    {
        return self::TemplatePath;
    }
}
