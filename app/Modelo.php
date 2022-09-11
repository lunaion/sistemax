<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $fillable = [
        'name',
        'mark_id',
    ];

    public function mark(){
        return $this->belongsTo(Mark::class);
    }

}
