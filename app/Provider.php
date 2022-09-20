<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
        'name', 'email', 'nit_number', 'address', 'phone',
    ];
    
    public function warranty(){
        return $this->belongsTo(Warranty::class);
    }
}
