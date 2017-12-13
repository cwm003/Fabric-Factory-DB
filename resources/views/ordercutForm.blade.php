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

	<form action='/ordercuts' method="get">
    <br>
    <div class="w3-container" style="margin-top:80px">
    <h1 class="blog-title">All OrderCut</h1>
    <table class="w3-table w3-striped w3-border w3-border">
    <thead class="w3-teal">
    <th><center>สถานะ</center></th>
    <th><center>รหัสการสั่งซื้อ</center></th>
    <th><center>รหัสการสั่งตัด</center></th>
    
    <th><center>ประเภทของผ้า</center></th>
    <th><center>รหัสสีผ้า</center></th>
    <th><center>จำนวนทั้งหมด</center></th>
    <th><center>พนักงานที่รับผิดชอบ</center></th>
    
    <th><center>วันที่เริ่มทำงาน</center></th>
    <th><center>วันที่ส่งมอบงาน</center></th>
  
    <th><center>แก้ไข</center></th> 
    <th><center>ลบ</center></th> 
    <th><center>แก้ไขสถานะ</center></th>
    <th><center>รายละเอียดออร์เดอร์</center></th>
    </thead> 
    
        @foreach ($ordercuts as $ordercut) 
          

			<tr>
            <td><center>{{$ordercut->status}}</center></td>
            <td><center>{{$ordercut->orderID}}</center></td>
            <td><center>{{$ordercut->OrderCutID}}</center></td>
            
            <td><center>{{$ordercut->typeCloth}}</center></td>
            <td><center>{{$ordercut->ColorID}}</center></td>
            <td><center>{{$ordercut->Total}}</center></td>
            <td><center>{{$ordercut->EmployeeCutID}}</center></td>
            <td><center>{{$ordercut->StartDate}}</center></td>
			<td><center>{{$ordercut->EndDate}}</center></td>
           
            
      
			<td><center><a href="/ordercuts/<?php echo $ordercut->OrderCutID; ?>/editpage/<?php echo $page; ?>"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></a></center></td>
			<td><center><a href="/ordercuts/<?php echo $ordercut->OrderCutID; ?>/delete/<?php echo $page; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></center></td>
            
            </form>
          
   <td><form action="/ordercuts/<?php echo $ordercut->OrderCutID; ?>/editstatus/<?php echo $page; ?>" method="post">
            <input type="radio" name="status" value="1"> Done.
            <br><input type="radio" name="status" value="0"> Not yet.
            <input type="submit" value="Update Status"></td>
            
        </form>

        <td><form action="/ordercuts/<?php echo $ordercut->orderID; ?>/linktoordercus/<?php echo $page; ?>" method="get">
        <input type="submit" value="Detail"></td></form></tr>
        @endforeach
        </table><br>
	<a href="/ordercuts/insertpage/<?php echo $page; ?>"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Order Cut</a>

    <br>

</body>
</div>
    </html> 
    @endsection