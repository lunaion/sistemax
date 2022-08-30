<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name', 'comment',
    ];

    public function cities(){
        return $this->hasMany(sities::class);
    }
}
