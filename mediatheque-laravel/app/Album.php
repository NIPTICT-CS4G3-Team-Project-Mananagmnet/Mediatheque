<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'album' , 'description'
    ];
    public function photos()
    {
        return $this->hasMany('App\Photos');
    }
}
