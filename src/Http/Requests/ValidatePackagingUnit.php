<?php

namespace LaravelLiberu\PackagingUnits\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Unique;

class ValidatePackagingUnit extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', $this->unique()],
            'description' => 'nullable',
        ];
    }

    protected function unique(): Unique
    {
        return Rule::unique('packaging_units', 'name')
            ->ignore($this->route('packagingUnit')?->id);
    }
}
