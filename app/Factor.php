<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    
    protected $primaryKey = 'factory_id';
    public $incrementing = false;
    
    function orderclothtofactory()
    {
        // FIXME 1
        return $this->belongsToMany('App\Ordercloth','factory_id');
    }
    //function factorytoordercut()
    //{
        // FIXME 1
       // return $this->belongsToMany('App\Ordercut','factory_id');
    // }
    
    
}