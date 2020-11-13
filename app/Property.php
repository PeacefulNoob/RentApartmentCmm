<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\PropertyFactory;

class Property extends Model
{    protected $table = 'properties';

    protected $fillable = [
        'title','description','price', 'size','floor','room_count', 'location_id','user_id','property_type_id','google_maps','persons','status','street','special'
    ];
    public function amenities(){
        return $this->belongsToMany('App\Amenity');
    }
    public function location()
    {
        return $this->belongsTo('App\Location');
    }
    public function propertyType()
    {
        return $this->belongsTo('App\PropertyType','property_type_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function images(){
        return $this->hasMany('App\PropertyImage');
    }
    public function isSpecial(){
        return $this->special;
    }

    public function scopeFilter($query, QueryFilter $filters){
        return $filters->apply($query);
    }
}
