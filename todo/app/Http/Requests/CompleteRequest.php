<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompleteRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'completed' => ['required', 'integer']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'completed' => '1',
        ]);
    }
}
