<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable=[
        'category_id','car_name','modal','size','price','capacity','seats','fuel_card','description','dimention'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function carImages(){
        return $this->hasMany(CarImage::class,'car_id');
    }
    public function insideImages(){
        return $this->hasMany(InsideImage::class,'car_id');
    }
    public function outImages(){
        return $this->hasMany(Outside::class,'car_id');
    }
    public function engineImages(){
        return $this->hasMany(Engine::class,'car_id');
    }
}
