<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    public function stock()
    {
        return $this->hasMany(Stock::class);
    }
}
