<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function owner()
    {
        return $this->hasMany(Owner::class);
    }
}
