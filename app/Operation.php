<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $fillable = [
        'name',
        'status',
        'city_id',
        'sede_id',
    ];

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function sede(){
        return $this->belongsTo(Sede::class);
    }
}
