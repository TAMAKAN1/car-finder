<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outside extends Model
{
    protected $fillable=[
        'car_id','out'
    ];
    public function car(){
        return $this->belongsTo(Car::class,'car_id');
    }
}
