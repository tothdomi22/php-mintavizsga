<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'title' => ['required'],
            'desc' => ['nullable'],
            'image' => ['nullable', 'image', 'max:1024'],
            'delete-image' => ['nullable', 'boolean']
        ];
    }
}
