<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $guarded = [];
    
    public function houses()
    {
        return $this->hasMany(House::class);
    }

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
