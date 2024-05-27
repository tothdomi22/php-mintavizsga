<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Gallery extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function image(): Attribute
    {
        return Attribute::get(
            fn (): string => (Str::startsWith($this->image_url, 'http')
                ? $this->image_url
                : Storage::disk('images')->url($this->image_url))
        );
    }

}

