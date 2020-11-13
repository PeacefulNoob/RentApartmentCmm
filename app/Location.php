<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\LocationFactory;

class Location extends Model
{
    protected $fillable = [
        'city','zip', 'status'
    ];
    public function properties(){
        return $this->hasMany('App\Property');
    }
}
