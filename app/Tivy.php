<?php

namespace TIVY;

use Illuminate\Database\Eloquent\Model;

class Tivy extends Model
{
   
    public function user(){
        return $this->belongsTo('\TIVY\User');
    }  
}
