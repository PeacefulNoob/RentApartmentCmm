<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\TypeFactory;

class PropertyType extends Model
{
    protected $fillable = [
        'title', 'photoUrl','status'
    ];
    public function properties(){
        return $this->hasMany('App\Property');
    }
}
