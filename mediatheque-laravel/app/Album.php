<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';
    protected $fillable =[
    	'album',
        'description',
    ];

    public function photos(){
        return $this->hasMany(Photos::class);
    }
}
