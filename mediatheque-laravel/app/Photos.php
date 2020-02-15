<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    protected $fillable = [
        'path' , 'name','date','description'
    ];
    public function album()
    {
        return $this->belongsTo('App\Album');
    }
}
