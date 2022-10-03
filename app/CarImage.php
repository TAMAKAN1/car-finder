<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarImage extends Model
{
    protected $fillable=[
        'car_id','out','in','out','engine'
    ];
    public function car(){
        return $this->belongsTo(Car::class,'car_id');
    }
}
