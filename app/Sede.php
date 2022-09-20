<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'image',
        'status',
        'city_id',
        'user_id',
    ];

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function operation(){
        return $this->belongsTo(Operation::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function warranty(){
        return $this->belongsTo(Warranty::class);
    }

    
}
