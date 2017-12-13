<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordercloth extends Model
{
    
    protected $primaryKey = 'order_clothid';
    public $incrementing = false;
    
    function recvFromOrderCus()
    {
        // FIXME 1
        return $this->hasOne('App\Ordercustomer','OrderID','order_clothid');
    }
    function sendToOrderCut()
    {
        // FIXME 1
        return $this->hasOne('App\Ordercut','OrderID');
    }
    function orderclothsendtofactory(){
        
        return $this->belongsToMany('App\Factor');
    }
    
}