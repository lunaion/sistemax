<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $fillable = [
        'name', 
        'description',
    ];

    public function warranty(){
        return $this->belongsTo(Warranty::class);
    }
}
