<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\AmenityFactory;

class Amenity extends Model
{
    protected $fillable = [
        'title', 'status', 'photoUrl'
    ];
 public function properties(){
        return $this->belongsToMany('App\Property');
    }
}
