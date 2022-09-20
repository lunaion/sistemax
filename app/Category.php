<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 
        'description',
    ];

    public function warranty(){
        return $this->hasMany(Warranty::class);
    }
}
