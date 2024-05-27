<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class TaskRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'desc' => ['required', 'string'],
            'user_id' => ['required', 'integer'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'user_id'=> auth()->id(),
        ]);
    }
}
