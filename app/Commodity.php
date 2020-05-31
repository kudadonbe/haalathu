<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    protected $guarded = [];

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
