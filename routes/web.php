<?php

namespace App;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/login', function () use ($router) {
    return $router->app->version();
});

$router->get('/department', function () use ($router) {
    return Department::all();
});

$router->get('/department/{id}', function($id){
	return Department::where('departmentID','=',$id)->first();
});
$router->get('/ordercus', function () use ($router) {
    return Ordercustomer::all();
});

$router->get('/employee/{id}', function ($id) use ($router) {
    return Employee::where('departmentID','=',$id)->first();
});

#----------------------customer-----------------------

$router->get('/customer/{id}', function ($id) {
    $customer = Customer::findOrFail($id);
    return $customer->sendToOrderCustomer;
});

$router->get('/allcustomer', function () {
    return Customer::all();
});

$router->get('/customers/page/{page}','CustomerController@formpage');

$router->get('/customers/insertpage/{page}','CustomerController@insertpage');

$router->post('/customers/save/{page}','CustomerCo}ntroller@save');

$router->get('/customers/{id}/editpage/{page}','CustomerController@editpage');

$router->post('/customers/{id}/editsave{page}','CustomerController@editsave');

$router->get('/customers/{id}/delete/{page}','CustomerController@delete');

$router->get('/', 'IndexController@index');

$router->get('/posts', 'PostController@index');

$router->get('/posts/{id}', 'PostController@view');

#------------employee---------------------------------


/*$router->get('/smile',function(){
    $employees = Employee::all();
    $emp = Department::findOrfail($employees->employee_work_on);
    return $emp;
} );*/


$router->get('/employees/page/{page}','EmployeeController@formpage');
$router->get('/employees/insertpage/{page}','EmployeeController@insertpage');
$router->post('/employees/save/{page}','EmployeeController@save');
$router->get('/employees/{id}/editpage/{page}','EmployeeController@editpage');
$router->post('/employees/{id}/editsave/{page}','EmployeeController@editsave');
$router->get('/employees/{id}/delete/{page}','EmployeeController@delete');


#---------------------department----------------------------
$router->get('/departments/page/{page}','DepartmentController@formpage');
$router->get('/departments/insertpage/{page}','DepartmentController@insertpage');
$router->post('/departments/save/{page}','DepartmentController@save');
$router->get('/departments/{id}/editpage/{page}','DepartmentController@editpage');
$router->post('/departments/{id}/editsave/{page}','DepartmentController@editsave');
$router->get('/departments/{id}/delete/{page}','DepartmentController@delete');

#--------------------factor-----------------------------------

$router->get('/factors/page/{page}','FactoryController@formpage');
    
$router->get('/factors/insertpage/{page}','FactoryController@insertpage');
$router->post('/factors/save/{page}','FactoryController@save');
$router->get('/factors/{id}/editpage/{page}','FactoryController@editpage');
$router->post('/factors/{id}/editsave/{page}','FactoryController@editsave');
$router->get('/factors/{id}/delete/{page}','FactoryController@delete');

/////////////////////////Status กับ allstatus เพิ่ม ///////////////////////////////////////////////
$router->get('/allstatuscheck/page/{page}','AllstatusController@allstatusformpage');
$router->get('/statusCheck','statusController@formpage');
$router->post('/statusCheck/result','statusController@result');

///////////////////////////////////////login ////////////////////////////////////////////////////
$router->get('/login','LoginController@loginformpage');
$router->post('/login/result','LoginController@loginresult');
#--------------------Order Custmoer ----OrderID========================
$router->get('/ordercustomers/page/{page}', 'OrdercustomerController@formpage');
$router->get('/ordercustomers/insertpage/{page}','OrdercustomerController@insertpage');
$router->post('/ordercustomers/save/{page}','OrdercustomerController@save');
$router->get('/ordercustomers/{id}/editpage/{page}','OrdercustomerController@editpage');
$router->post('/ordercustomers/{id}/editsave/{page}','OrdercustomerController@editsave');
$router->get('/ordercustomers/{id}/delete/{page}','OrdercustomerController@delete');
$router->get('/ordercustomers/{id}/linktocus/{page}','OrdercustomerController@linktocus'); 
#-----------------Ordercloth ----------------------------------

$router->get('/ordercloths/page/{page}', 'OrderclothController@formpage');

$router->get('/ordercloths/insertpage/{page}','OrderclothController@insertpage');
$router->post('/ordercloths/save/{page}','OrderclothController@save');
$router->get('/ordercloths/{id}/editpage/{page}','OrderclothController@editpage');
$router->post('/ordercloths/{id}/editsave/{page}','OrderclothController@editsave');
$router->get('/ordercloths/{id}/delete/{page}','OrderclothController@delete');
$router->post('/ordercloths/{id}/editstatus/{page}', 'OrderclothController@editstatus');
$router->post('/ordercloths/{id}/linktoordercus/{page}','OrderclothController@linktoordercus');
//$router->get('/ordercloths/{id}/linktocus','OrderclothController@linktocus');
#--------------------Order Cut--------------------------------------

$router->get('/ordercuts/page/{page}', 'OrdercutController@formpage');

$router->get('/ordercuts/insertpage/{page}','OrdercutController@insertpage');
$router->post('/ordercuts/save/{page}','OrdercutController@save');
$router->get('/ordercuts/{id}/editpage/{page}','OrdercutController@editpage');
$router->post('/ordercuts/{id}/editsave/{page}','OrdercutController@editsave');
$router->get('/ordercuts/{id}/delete/{page}','OrdercutController@delete');
$router->post('/ordercuts/{id}/editstatus/{page}','OrdercutController@editstatus');

$router->get('/ordercuts/{id}/linktoordercus/{page}','OrdercutController@linktoordercus');


#-----------------------Order sew-----------------------------------

$router->get('/ordersews/page/{page}','OrdersewController@formpage');

$router->get('/ordersews/insertpage/{page}','OrdersewController@insertpage');
$router->post('/ordersews/save/{page}','OrdersewController@save');
$router->get('/ordersews/{id}/editpage/{page}','OrdersewController@editpage');
$router->post('/ordersews/{id}/editsave/{page}','OrdersewController@editsave');
$router->get('/ordersews/{id}/delete/{page}','OrdersewController@delete');
$router->post('/ordersews/{id}/editstatus/{page}','OrdersewController@editstatus');
$router->get('/ordersews/{id}/linktoordercus/{page}','OrdersewController@linktoordercus');
#-------------------------Chart----------------------------------------------------------
#$router->get('ledger','ledgerController@formpage');

$router->get('/ledgers/page/{page}','ledgerController@formpage');
#$router->get('ledgers/chart','ledgerController@chart');


#------------------------login-----empcut-----------------------------------
//$router->get('/employees/cuts','EmployeeController@empcut');
//$router->get('/employees/ordercustomers','EmployeeController@empcus');
//$router->get('/employees/sews','EmployeeController@empsew');
//$router->get('/employees/orderCloth','EmployeeController@orderCloth');

$router->get('/ceo', function () use ($router) {
    return view('ceo');
});

$router->get('/managerOrderCloth', function () use ($router) {
    return view('managerordercloth');
});

$router->get('/managerCut', function () use ($router) {
    return view('managercut');
});

$router->get('/managerSew', function () use ($router) {
    return view('managersew');
});

$router->get('/managerOrderCustomer', function () use ($router) {
    return view('managerordercustomer');
});

