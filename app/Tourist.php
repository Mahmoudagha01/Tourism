<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tourist extends Model
{
   
    public function rooms()
    {
        
        //pivot tabel user_room

    //  return $this->belongsToMany('App\Room', 'reservation', 'guest_id', 'room_id');
       
    }
}
