<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name', 'comment',
    ];

    public function sede(){
        return $this->hasMany(Sede::class);
    }

    public function operation(){
        return $this->hasMany(Operation::class);
    }
}
