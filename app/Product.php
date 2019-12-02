<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'title',
        'image',
        'category',
        'price',
        'logo',
        'brand',
    ];

    public function campaigns()
    {
        return $this->hasMany(Campaign::class);
    }
}
