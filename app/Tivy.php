<?php

namespace TIVY;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Tivy extends Model
{
   
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tittle',
    ];


    public function user(){
        return $this->belongsTo('\TIVY\User');
    }  
}
