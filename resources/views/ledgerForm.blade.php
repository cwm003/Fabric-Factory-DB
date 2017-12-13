@extends('layouts.out')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>INCOME</title>
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

	<form action='/ledgers' method="get">
    <br>

<div class="w3-container" style="margin-top:80px;margin-left:270px;margin-right:270px">
    <h1 class="blog-title">ACCOUNT</h1>
    <table class="w3-table w3-striped w3-border w3-border">
    <thead class="w3-teal">
    <!-- <th><center>รหัสการสั่งซื้อ</center></th>
    <th><center>Order ลูกค้า</center></th> -->
    <!-- <th><center>รหัสโรงงาน</center></th> -->
    <!-- <th><center>วันที่จ่ายเงิน</center></th> -->
    <th><center>เดือน/ปี</center></th>
    <th><center>รายรับต่อเดือน</center></th>
    <!-- <th><center>โอนเข้าบัญชี</center></th> -->
    </thead>
    
        @foreach ($total as $to) 
            <tr>
            <td><center>{{$to->month}} / {{$to->year}}</td>
    <td ><center><font color = green>
    + {{$to->sum}}</td></center></font></tr>
    </center>
           
        </tr>
        
        @endforeach
       
       
   
    <!-- <td BGCOLOR = red ><center>
    - {{$expense}}</td></center><td></td><td></td></tr>
    </center> -->
</table>
    
        </table>
        <br>
        <br>

        <table class="w3-table w3-striped w3-border w3-border">
        <thead class="w3-teal">
        <!-- <th><center>รหัสการสั่งซื้อ</center></th>
        <th><center>Order ลูกค้า</center></th> -->
        <!-- <th><center>รหัสโรงงาน</center></th> -->
        <!-- <th><center>วันที่จ่ายเงิน</center></th> -->
        <th><center>เดือน/ปี</center></th>
        <th><center>รายจ่ายต่อเดือน</center></th>
        <!-- <th><center>โอนเข้าบัญชี</center></th> -->
        </thead>
        
            @foreach ($expense as $ex) 
                <tr>
                <td><center>{{$ex->month}} / {{$ex->year}}</td>
        <td ><center><font color = red>
        - {{$ex->sum}}</td></center></font></tr>
        </center>
               
            </tr>
            
            @endforeach
           
           
       
        <!-- <td BGCOLOR = red ><center>
        - {{$expense}}</td></center><td></td><td></td></tr>
        </center> -->
 </table>
        </form>
</body>
</div>
    </html> 
    @endsection
    