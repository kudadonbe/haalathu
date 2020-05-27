<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
