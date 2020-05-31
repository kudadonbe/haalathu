<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];
    public function house()
    {
        return $this->hasMany(House::class);
    }

    public function commodity()
    {
        return $this->hasMany(Commodity::class);
    }
}
