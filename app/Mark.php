<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    public function marks(){
        return $this->hasMany(Mark::class);
    }
}
