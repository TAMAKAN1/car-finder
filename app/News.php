<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected  $fillable=[
        'subject','date','content','keyword'
    ];
    public function images(){
        return $this->hasMany(newImages::class,'news_id');
    }
}
