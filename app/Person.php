<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = [];
    
    
    public function owners()
    {
        return $this->hasMany(Owner::class);
    }
}
