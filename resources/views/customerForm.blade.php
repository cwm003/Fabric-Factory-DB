@extends('layouts.out')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>CUSTOMER FORM</title>
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
<form action='/customers' method="get">
<br>

<div class="w3-container" style="margin-top:80px;margin-left:100px;margin-right:100px">
<h1 class="w3-jumbo"><b>All Customers</b></h1>
<table class="w3-table w3-striped w3-border w3-border">
    <thead class="w3-teal">
        <th>รหัสลูกค้า</th>
        <th>ชื่อ</th>
        <th>ที่อยู่</th>
        <th>เบอร์โทร</th>
        <th>แก้ไข</th> 
        <th>ลบ</th>
    </thead>
    @foreach ($customers as $customer) 
			<tr>
			<td>{{$customer->customerID}}</td>
			<td>{{$customer->nameCus}}</td>
			<td>{{$customer->Address}}</td>
			<td>{{$customer->tel}}</td>
			<td><a href="/customers/<?php echo $customer->customerID; ?>/editpage/<?php echo $page; ?>" > <i class="fa fa-pencil fa-fw" aria-hidden="true"></i></a></td>
			<td><a href="/customers/<?php echo $customer->customerID; ?>/delete/<?php echo $page; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
			</tr>
        
        @endforeach
        
</table>

    <br>
	<a href="/customers/insertpage/<?php echo $page; ?>"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Customer</a>
	<!--<form action='/customers/insertpage' method ="get"><input type="submit" value="Add Customer"></form>-->
	</div>
    </form>
    </body>

    </html> 
    @endsection