<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    //
    //Tables
    protected $table = 'forms';
    
    //primary key
    public $primaryKey = 'id';

    //Timestamp
    public $timestamps = true;

}
