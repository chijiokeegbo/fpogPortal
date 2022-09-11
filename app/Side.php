<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Side extends Model
{
    //Tables
    protected $table = 'posts';
    
    //primary key
    public $primaryKey = 'id';

    //Timestamp
    public $timestamps = true;

}