<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
