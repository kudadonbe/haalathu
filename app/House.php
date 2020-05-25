<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{

    // protected $fillable = [
    //     'nid', 'username', 'name', 'email', 'password','user_img'
    // ];

    // protected $guarded = [];
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
    public function item()
    {
        return $this->hasMany(Item::class);
    }


}
