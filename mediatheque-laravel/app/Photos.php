<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    //
    protected $fillable = ['path','name','date','description','album_id','category_id'];

    public function album(){

        return $this->belongsTo(Album::class);
    }


    public function category(){

        return $this->belongsTo(Category::class);
    }
}
