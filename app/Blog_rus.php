<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_rus extends Model
{
    protected $fillable = [
        'title','description','photo', 'user_id'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
