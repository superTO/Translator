<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class document extends Model
{
    public function translator1()
    {
        return  $this->belongsTo('App\User');
    }
    public function translator2()
    {
        return  $this->belongsTo('App\User');
    }
     public function translator3()
    {
        return  $this->belongsTo('App\User');
    }
        public function translator4()
    {
        return  $this->belongsTo('App\User');
    }
}
