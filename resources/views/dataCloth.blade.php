@extends('layouts.out')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>ALL STATUS CHECK</title>
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
    <a class="list-group-item w3-bar-item w3-button w3-wide w3-right" href="/ordercloths/page/<?php echo $page; ?>"><i class="fa fa-arrow-circle-left"></i>BACK</a>
    </a>
  </div>
</div>
</head>

<body>
<form action="/ordercuts/<?php echo $ordercustomer->OrderID; ?>/linktoordercus" method="get">
<br>
<div style="margin-left:100px">
<div class="w3-container" style="margin-top:80px">
<h1 class="blog-title"> Ordercustomer : {{$id}}</h1>
<ul class="w3-ul" style="width:500px;margin-right:300px">    
<thead class="w3-teal">
	<br>
    
    <p>รหัสการสั่งซื้อ :</p><li>{{$ordercustomer->OrderID}}</li>
    <p>ชื่อลูกค้า :</p><li>{{$ordercustomer->Fname}}</li>
    <p>รหัสลูกค้า :</p><li>{{$ordercustomer->idcustomer}}</li>
    <p>ที่อยู่ลูกค้า :</p><li>{{$ordercustomer->Address}}</li>
    <p>เบอร์โทรศัพท์ติดต่อ :</p><li>{{$ordercustomer->Tel}}</li>
    <p>รายละเอียด :</p><li>{{$ordercustomer->Detail}}</li>
    <p>รูปแบบของเสื้อ :</p><li>{{$ordercustomer->typeproduct}}</li>
    <p>ประเภทของผ้า :</p><li>{{$ordercustomer->type_cloth}}</li>
    <p>รหัสสี :</p><li>{{$ordercustomer->color_cloth}}</li>
    <p>ขนาด :</p><li>{{$ordercustomer->size}}</li>
    <p>จำนวน :</p><li>{{$ordercustomer->Total}}</li>
    <p>ราคาต่อชิ้น :</p><li>{{$ordercustomer->Price}}</li>
    <p>ราคารวม :</p><li>{{$ordercustomer->linetotal}}</li>
    <p>วันที่สั่ง :</p><li>{{$ordercustomer->startdate}}</li>
    <p>วันที่ส่ง :</p><li>{{$ordercustomer->dateship}}</li>
    <p>พนักงานรับออเดอร์ :</p><li>{{$ordercustomer->employeeID_recv}}</li>
    </thead>
	</form>
	
	

</body>
</div>
</html> 
@endsection
