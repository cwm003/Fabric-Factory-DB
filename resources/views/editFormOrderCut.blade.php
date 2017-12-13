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
    <a class="list-group-item w3-bar-item w3-button w3-wide w3-right" href="/ordercuts/page/<?php echo $page; ?>"><i class="fa fa-arrow-circle-left"></i>BACK</a>
    </a>
  </div>
</div>
</head>
<body>
<br>
<br>
<div style="margin-left:250px">
<h2>Edit OrderCut</h2></div>
	<form action='/ordercuts/<?php echo $id; ?>/editsave/<?php echo $page; ?>' method="post" style="width:500px;font-weight:bold;margin-left:100px">
	<br>
	<tr><td>OrderID :</td>
	<td>{{$ordercut->orderID}} </td></tr><br>
	<tr>
	<td>Order Cut ID :</td>
	<td>{{$id}}</td><br>
	<!-- <td><input type="text" name="OrderCutID" 
	pattern="[0-9]{5}" 
		title="Fives letter number code" required></td></tr> -->
	<tr>
		<td>ประเภทผ้า : </td>
		<td>{{$ordercut->typeCloth}}</td>
		<!-- <td><select name="typeCloth" >
			<option value="TC">TC</option>
			<option value="TK">TK</option>
			<option value="Cotton">Cotton</option>
			</select></td> -->
	</tr>
	<!-- <tr>
		<td>รหัสสี : </td>
		<td><input type="text" name="ColorID" required> </td> 
	</tr> -->
	<p><br>
	<label>พนักงานตัด</label>
		<input class="w3-input" type="text" name="EmployeeCutID" required
		pattern="[0-9]{10}" 
		title="Ten letter number code" required>
	</p>
	<!-- <tr>
		<td>Factory ID : </td>
		<td><input type="text" name="factory_id" required
		pattern="[0-9]{4}" 
		title="Fours letter number code" required> </td> 
	</tr> -->
	<p>
	<label>วันที่เริ่มงาน</label>
		<input class="w3-input" type="date" name="StartDate" required>
	</p>
	<p>
	<label>วันที่เสร็จงาน</label>
		<input class="w3-input" type="date" name="EndDate" required>
	</p>
	<!-- <tr>
		<td>สถานะ : </td>
		<td><input type="radio" name="status" value="1"> Done.<br>
			<input type="radio" name="status" value="0" checked> Not yet.<br>
		</td>
	</tr> -->
	<tr>
		<td><input type="submit" name="submit" value="Add">
		<input type="reset"></td>
	</tr>
</form>

</body>
</html>
@endsection