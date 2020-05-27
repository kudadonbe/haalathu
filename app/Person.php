<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function houses()
    {
        return $this->hasMany(House::class);
    }

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
}
