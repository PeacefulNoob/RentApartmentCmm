<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Covid extends Model
{
    protected $fillable = [
        'title','subtitle','description', 'user_id'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }

}
