<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    // protected $guarded = [];
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function commodity()
    {
        return $this->hasMany(Commodity::class);
    }

}
