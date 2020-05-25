<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
    public function stock()
    {
        return $this->hasMany(Stock::class);
    }
}
