<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordersew extends Model
{
    protected $primaryKey = 'OrderSewID';
    public $incrementing = false;
    
    function ordercuttoordersew()
    {
        // FIXME 1
        return $this->hasOne('App\Ordercut','OrderID');
    }
    
}