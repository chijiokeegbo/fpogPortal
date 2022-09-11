<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    //
    //Tables
    protected $table = 'units';
    
    //primary key
    public $primaryKey = 'id';

    //Timestamp
    public $timestamps = true;

    public function User(){
        return $this->belongsTo('App\User');
    }
}
