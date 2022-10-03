<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsideImage extends Model
{
    protected $fillable=[
        'car_id','in'
    ];
    public function car(){
        return $this->belongsTo(Car::class,'car_id');
    }
}
