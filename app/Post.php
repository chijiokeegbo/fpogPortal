<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Tables
    protected $table = 'posts';
    
    //primary key
    public $primaryKey = 'id';

    //Timestamp
    public $timestamps = true;

    public function User(){
        return $this->belongsTo('App\User');
    }
}
