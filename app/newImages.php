<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newImages extends Model
{
    protected $fillable=[
        'news_id','image'
    ];
    public function news(){
        return $this->belongsTo(News::class,'news_id');
    }
}
