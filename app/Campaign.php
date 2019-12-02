<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{

    protected $fillable = [
        'product_id',
        'key'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
