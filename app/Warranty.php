<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warranty extends Model
{
    protected $fillable = [
        'ticket',
        'warranty_date', 
        'category_id', 
        'type_id', 
        'plate', 
        'serial', 
        'mark_id', 
        'modelo_id',
        'part_id',
        'city_id',
        'sede_id',
        'operation_id',
        'provider_id',
        'comments',
        'user_id',
        'status',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function type() {
        return $this->belongsTo(Type::class);
    }

    public function mark() {
        return $this->belongsTo(Mark::class);
    }

    public function modelo() {
        return $this->belongsTo(Modelo::class);
    }

    public function part() {
        return $this->belongsTo(Part::class);
    }

    public function city() {
        return $this->belongsTo(City::class);
    }

    public function sede() {
        return $this->belongsTo(Sede::class);
    }

    public function operation() {
        return $this->belongsTo(Operation::class);
    }

    public function provider() {
        return $this->belongsTo(Provider::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}
