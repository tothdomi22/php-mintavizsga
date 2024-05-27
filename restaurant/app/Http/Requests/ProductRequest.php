<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' =>['required'],
            'desc' =>['required'],
            'price' =>['required']
        ];
    }


}
