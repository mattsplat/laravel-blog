<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $created_date = ['created_at'];

    public function setTitle($value){
        $this->attributes['title'] = $value;        
    } 
}
