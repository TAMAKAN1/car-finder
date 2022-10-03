<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Engine extends Model
{
    protected $fillable=[
        'car_id','enngine'
    ];
    public function car(){
        return $this->belongsTo(Engine::class,'car_id');
    }
}
