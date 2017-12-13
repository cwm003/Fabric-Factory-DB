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

	<form action='/ordersews' method="get">
    <br>
    <div class="w3-container" style="margin-top:80px">
    <h1 class="blog-title">All OrderSew</h1>
    <table class="w3-table w3-striped w3-border w3-border">
    <thead class="w3-teal">
    <td><center>สถานะ</center></td>
    <td><center>รหัสการสั่งซื้อ</center></td>
    <td><center>รหัสการสั่งเย็บ</center></td>
    <td><center>พนักงานที่ทำ</center></td>
    <th><center>วันที่เริ่มทำงาน</center></th>
    <th><center>วันที่ส่งมอบทำงาน</center></th>  
    <td><center>จำนวน</center></td>
    <td><center>แก้ไข</center></td>  
    <td><center>ลบ</center></td>
    <td><center>แก้ไขสถานะ</td> </center>   
    <td><center>รายละเอียดออร์เดอร์</center></td>
    </thead> 
    
        @foreach ($ordersews as $ordersew) 
           
			<tr>
			<td><center>{{$ordersew->status}}</center></td>
			<td><center>{{$ordersew->OrderID}}</center></td>
			<td><center>{{$ordersew->OrderSewID}}</center></td>
            <td><center>{{$ordersew->EmployeeSewID}}</center></td>
            <td><center>{{$ordersew->StartDate}}</center></td>
			<td><center>{{$ordersew->EndDate}}</center></td>
			<td><center>{{$ordersew->Total}}</center></td>
			<td><center><a href="/ordersews/<?php echo $ordersew->OrderSewID; ?>/editpage/<?php echo $page; ?>"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></a></center></td>
			<td><center><a href="/ordersews/<?php echo $ordersew->OrderSewID; ?>/delete/<?php echo $page; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></center></td>
			
           
            </form>
            
     <td><form action="/ordersews/<?php echo $ordersew->OrderSewID; ?>/editstatus/<?php echo $page; ?>" method="post">
              <input type="radio" name="status" value="1"> Done.
              <br><input type="radio" name="status" value="0"> Not yet.
              <input type="submit" value="Update Status"></td>
              
          </form>
          <td><form action="/ordersews/<?php echo $ordersew->OrderID; ?>/linktoordercus/<?php echo $page; ?>" method="get">
        <input type="submit" value="Detail"></td></form></tr>
          @endforeach
          </table><br>
      <a href="/ordersews/insertpage/<?php echo $page; ?>"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Order Sew</button></a>
  
      <br>
  
  </body>
  </div>
      </html> 
      @endsection