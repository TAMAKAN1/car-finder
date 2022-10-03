<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'category_name','image'
    ];
    public function cars(){
        return $this->hasMany(Car::class,'car_id');
    }
}
