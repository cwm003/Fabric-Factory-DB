@extends('layouts.out')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>ORDERCLOTH FORM</title>
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

	<form action='/ordercloths' method="get">
    <br>
    <div class="w3-container" style="margin-top:80px">
<h1 class="blog-title">All Ordercloths</h1>
<table class="w3-table w3-striped w3-border w3-border">
<thead class="w3-teal">
    <th>สถานะ</th>
    <th>รหัสการสั่งซื้อ</th>
    <th>รหัสออร์เดอร์ลูกค้า</th>
    <th>โรงงานสั่งผ้า</th>
    
   
    <th>วันที่สั่งซื้อผ้า</th>
    <th>ชนิดผ้า</th>
    <th>รหัสสีผ้า</th>
    <th>น้ำหนัก</th>
    
    <th>วันที่ได้โรงงานส่งผ้า</th>
    <th>วันที่ได้รับ</th>
    <th>ความกว้าง</th>
    <th>จำนวนพับ</th>
    <th>ราคาต่อพับ</th>
    <th>จำนวน(ตัว)</th>
    <th>จำนวนเงินทั้งหมด</th>
    
    <th>แก้ไข</th> 
    <th>ลบ</th> 
    <th>แก้ไขสถานะ</th>
    <th>รายละเอียด Order</th>
    </thead>
    
        @foreach ($ordercloths as $ordercloth) 

           
			<tr>
			<td><center>{{$ordercloth->status}}</center></td>
            
            <td><center>{{$ordercloth->order_clothid}}</center></td>
            <td><center>{{$ordercloth->OrderID}}</center></td>
            <td><center>{{$ordercloth->factory_id}}</center></td>
			<td><center>{{$ordercloth->startorder}}</center></td>
            <td><center>{{$ordercloth->type_cloth}}</center></td>
            <td><center>{{$ordercloth->color_cloth}}</center></td>
            <td><center>{{$ordercloth->weight_cloth}}</center></td>
            <td><center>{{$ordercloth->date_tranfer}}</center></td>
            <td><center>{{$ordercloth->date_recv}}</center></td>
            <td><center>{{$ordercloth->width_cloth}}</center></td>
            <td><center>{{$ordercloth->folding}}</center></td>
			<td><center>{{$ordercloth->unit_folding}}</center></td>
            <td><center>{{$ordercloth->Total}}</center></td>
            <td><center>{{$ordercloth->linetotal}}</center></td>
            
        
            <td><center><a href="/ordercloths/<?php echo $ordercloth->order_clothid; ?>/editpage/<?php echo $page; ?>"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></a></center></td>
            <td><center><a href="/ordercloths/<?php echo $ordercloth->order_clothid; ?>/delete/<?php echo $page; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></center></td>
            
        </form>
   <!-- <form action="/ordercustomers/insertpage"><input type="submit" value="Add Ordercustomer"></form>";-->
    
   <td><form action="/ordercloths/<?php echo $ordercloth->order_clothid; ?>/editstatus/<?php echo $page; ?>" method="post">
            <input type="radio" name="status" value="1"> Done.
            <br><input type="radio" name="status" value="0"> Not yet.
            <input type="submit" value="Update Status"></td>
            
        </form>
        <td><form action="/ordercloths/<?php echo $ordercloth->OrderID; ?>/linktoordercus/<?php echo $page; ?>" method="post">
        <input type="submit" value="Detail"></td></form></tr>

        
        @endforeach
        </table><br>

        
    <a href="/ordercloths/insertpage/<?php echo $page; ?>"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Ordercloth</a>
    </body>
</div>
    </html> 
    @endsection
