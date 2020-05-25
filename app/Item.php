<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function house()
    {
        return $this->hasMany(House::class);
    }

    public function commodity()
    {
        return $this->hasMany(Commodity::class);
    }
}
