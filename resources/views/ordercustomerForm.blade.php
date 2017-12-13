@extends('layouts.out')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>INSERT FORM</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
</style>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar"> 
    <a class="list-group-item w3-bar-item w3-button w3-wide" href="/"><i class="fa fa-home fa-fw"></i>PEECHADJANE</a>
    <a class="list-group-item w3-bar-item w3-button w3-wide w3-right" href="/<?php echo $page; ?>"><i class="fa fa-arrow-circle-left"></i>BACK</a>
    </a>
  </div>
</div>
</head>
<body>

	<form action='/ordercustomers' method="get">
    <br>
    <br>
<div class="w3-container" style="margin-top:80px">
<h1 class="w3-jumbo"><b>All Ordercustomer</b></h1>
<table class="w3-table w3-striped w3-border w3-border">
<thead class="w3-teal">
    <th>ชื่อลูกค้า</th>
    <th>รหัสลูกค้า</th>
    <th>ที่อยู่ที่ติดต่อได้</th>
    <th>เบอร์โทรศัพท์</th>
    <th>รหัสการสั่งซื้อ</th> 
    <th>รายละเอียด</th>
    <th>ชนิดสินค้า</th> 
    <th>ชนิดผ้า</th>
    <th>รหัสสีผ้า</th>
    <th>ไซส์</th> 
    <th>จำนวน</th>  
    <th>ราคาต่อชิ้น</th>  
    <th>ราคารวมทั้งหมด</th> 
    <th>วันที่สั่ง</th>
    <th>วันที่ส่ง</th>  
    <th>พนักงานรับการสั่งซื้อ</th> 
    <!-- <th><center>Detail customer</center></th>  -->
    
    
    <th>แก้ไข</th> 
    <th>ลบ</th>    
    <th>รายละเอียดลูกค้า</th>
    </thead>
    
        @foreach ($ordercustomers as $ordercustomer) 

           
			<tr>
			<td><center>{{$ordercustomer->Fname}}</center></td>
            <td><center>{{$ordercustomer->idcustomer}}</center></td>
            <td><center>{{$ordercustomer->Address}}</center></td>
            <td><center>{{$ordercustomer->Tel}}</center></td>
			<td><center>{{$ordercustomer->OrderID}}</center></td>
            <td><center>{{$ordercustomer->Detail}}</center></td>
            <td><center>{{$ordercustomer->typeproduct}}</center></td>
            <td><center>{{$ordercustomer->type_cloth}}</center></td>
            <td><center>{{$ordercustomer->color_cloth}}</center></td>
            <td><center>{{$ordercustomer->size}}</center></td>
            <td><center>{{$ordercustomer->Total}}</center></td>
			<td><center>{{$ordercustomer->Price}}</center></td>
            <td><center>{{$ordercustomer->linetotal}}</center></td>
			<td><center>{{$ordercustomer->startdate}}</center></td>
            <td><center>{{$ordercustomer->dateship}}</center></td>
            
			
            <td><center>{{$ordercustomer->employeeID_recv}}</center></td>
           
            
            <td><center><a href="/ordercustomers/<?php echo $ordercustomer->OrderID; ?>/editpage/<?php echo $page; ?>"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></a></center></td>
            <td><center><a href="/ordercustomers/<?php echo $ordercustomer->OrderID; ?>/delete/<?php echo $page; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></center></td>
            
            </form>
            <td><form action="/ordercustomers/<?php echo $ordercustomer->idcustomer; ?>/linktocus/<?php echo $page; ?>" method="get">
            <input type="submit" value="Detail"></td></form></tr>
           
        @endforeach
    
    </table><br>
    
    <a href="/ordercustomers/insertpage/<?php echo $page; ?>"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Ordercustomer</a>
   <!-- <form action="/ordercustomers/insertpage"><input type="submit" value="Add Ordercustomer"></form>";-->
    
    </body>
</div>
    </html> 
    @endsection

                <!--$a = $ordercustomer->Total;
            $b = $ordercustomer->Price;
            $linetotal = $a * $b ;

            $emp = $ordercustomer->employeeID_recv;
            $employeeIDrecv = Employee::findOrFail($emp);
-->