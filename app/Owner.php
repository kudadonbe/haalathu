<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function house()
    {
        return $this->hasMany(House::class);
    }

    public function shop()
    {
        return $this->hasMany(Shop::class);
    }

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
