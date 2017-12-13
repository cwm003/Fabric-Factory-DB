<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey = 'customerID';
    
    function sendToOrderCustomer()
    {
        // FIXME 1
        return $this->belongsToMany('App\Ordercustomer', 'orderofcustomers' ,'customerID', 'OrderID');
    }
    //mn pk fk
}