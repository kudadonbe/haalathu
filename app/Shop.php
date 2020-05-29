<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $guarded = [];
    
  
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
    
    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
