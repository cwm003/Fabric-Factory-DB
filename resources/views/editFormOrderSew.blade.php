@extends('layouts.out')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>EDIT FORM</title>
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
	<a class="list-group-item w3-bar-item w3-button w3-wide w3-right" href="/ordersews/page/<?php echo $page; ?>"><i class="fa fa-arrow-circle-left"></i>BACK</a>
    </a>
  </div>
</div>
</head>
<body>
<br>
<br>
<div style="margin-left:250px">
<h2>Edit OrderSew</h2></div>
	<form action='/ordersews/<?php echo $id; ?>/editsave/<?php echo $page; ?>' method="post" style="width:500px;font-weight:bold;margin-left:100px">
	<br>
	<tr>OrderID : {{$osews->OrderID}}</tr><br>
	<tr>
	<td>Order Sew ID :</td>
	<td>{{$id}}</td>
	<!-- <td><input type="text" name="OrderSewID" 
	pattern="[0-9]{5}" 
		title="Fives letter number code" required></td></tr>
	<tr> -->
	<p><br>
	<label>พนักงานเย็บ</label>
		<input class="w3-input" type="text" name="EmployeeSewID"
		pattern="[0-9]{10}" 
		title="Three letter number code" required>
	</p>
	<p>
	<label>วันที่เริ่มงาน</label>
		<input class="w3-input" type="date" name="StartDate" required>
	</p>
	<p>
	<label>วันเสร็จงาน</label>
		<input class="w3-input" type="date" name="EndDate" required>
	</p>
	<!-- <tr>
		<td>สถานะ</label>
		<td><input type="radio" name="status" value="1"> Done.<br>
			<input type="radio" name="status" value="0" checked> Not yet.<br>
		</td>
	</tr> -->
	<tr>
		<td><input type="submit" name="submit" value="Add">
		<input type="reset"></td>
	</tr>
</table>
	</form>

</body>
</html>
@endsection