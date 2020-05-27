<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{

    // protected $fillable = [
    //     'nid', 'username', 'name', 'email', 'password','user_img'
    // ];

    protected $guarded = [];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
    public function item()
    {
        return $this->hasMany(Item::class);
    }



}
