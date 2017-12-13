<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordercustomer extends Model
{
    protected $primaryKey = 'OrderID';
    public $incrementing = false;
    // protected $fillable = ['Fname','idcustomer','OrderID'
    // ,'Detail','Total','Price','startdate','dateship','typeproduct','color_cloth'
    // ,'employeeID_recv','size','Tel'];
    
    function sendToOrderCloth()
    {
        // FIXME 1
        return $this->belongsTo('App\Order_cloth', 'order_clothid');
    }

    
    function sendToOrderCustomer()
    {
        return $this->belongsToMany('App\Customer', 'orderofcustomers','OrderID','customerID' );
    }
    // ตาราง , pk ของordercus , pk ของตาราง cus
    //'OrderID','customerID'
    
    
}