<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    // protected $guarded = [];
    public function shop()
    {
        return $this->hasMany(Shop::class);
    }

    public function commodity()
    {
        return $this->hasMany(Commodity::class);
    }

}
