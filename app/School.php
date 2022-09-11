<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //Table
    protected $table = 'schools';
    
    //primary key
    public $primaryKey = 'id';

    //Timestamp
    public $timestamps = true;

    public function User(){
        return $this->belongsTo('App\User');
    }
}
