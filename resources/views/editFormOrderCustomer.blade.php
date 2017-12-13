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
	<a class="list-group-item w3-bar-item w3-button w3-wide w3-right" href="/ordercustomers/page/<?php echo $page; ?>"><i class="fa fa-arrow-circle-left"></i>BACK</a>
    </a>
  </div>
</div>
</head>
<body>
<br>
<br>
<div style="margin-left:250px">
<h2>Edit OrderCustomer</h2></div>
	<form action='/ordercustomers/<?php echo $id; ?>/editsave/<?php echo $page; ?>' method="post" style="width:500px;font-weight:bold;margin-left:100px">
	<br>
	
	<p>
	<tr><td>Customer Name :</td>
	<td>{{$customers->nameCus}}</td></tr><br>
	<tr><td>Customer ID :</td>
	<td>{{$customers->customerID}}</td></tr><br>
	<tr><td>Order ID :</td>
	<td>{{$id}}</td></tr>
 	</p>

<!-- <p>
	<label>Tel</label>
	<label><input type="text" name="Tel"
	pattern="[0-9]{10}" 
	title="Ten letter number phone" required>
</p>-->
<!--<p>
	<label>Order ID</label>
	<label><input type="text" name="OrderID" 
	pattern="[0-9]{5}" 
	title="Five letter number ID" required>
</p>-->
<p>
	<label>Detail</label>
	<input class="w3-input" type="text" name="Detail" required>
</p>
<p>
	<label>Type Product</label>
	<select name="typeproduct" >
	<option value="Polo">Polo</option>
	<option value="T-Shirts">T-Shirts</option>
	<option value="Other">Other</option>
	</select>
</p>
<p>
<label>Type of Cloth</label>
<select name="type_cloth" >
	<option value="TC">TC</option>
	<option value="TK">TK</option>
	<option value="Cotton">Cotton</option>
	</select>
</p>
<p>
	<label>Color Cloth</label>
	<input class="w3-input" type="text" name="color_cloth" 
	pattern="[0-9]{3}" 
	title="Five letter number ID" required>
</p>
<tr>
	<td>Size</td>
	<td>
		<input type="radio" name="size" value="S">S
		<input type="radio" name="size" value="M">M
		<input type="radio" name="size" value="L">L
		<input type="radio" name="size" value="XL">XL
	</td>
	</tr>

<p><br>
	<label>Total(จำนวน)</label>
	<input class="w3-input" type="text" name="Total" required>
</p>
<br>
<tr>
	<td>Price</td>
	<br>
	<td>
	<input type="radio" name="Price" value="100">S ราคา 100 บาท <br>
	<input type="radio" name="Price" value="120">M ราคา 120 บาท <br>
	<input type="radio" name="Price" value="140">L ราคา 140 บาท <br>
	<input type="radio" name="Price" value="150">XL ราคา 150 บาท <br>
	</td>
</tr>
<p>
<br>
	<label>Start date</label>
	<input class="w3-input" type="date" name="startdate" required>
</p>
<p>
	<label>Date Ship</label>
	<input class="w3-input" type="date" name="dateship"  required>
</p>


<p>
	<label>Employee ID Reciever</label>
	<input class="w3-input" type="text" name="employeeID_recv" 
	pattern="[0-9]{10}" 
	title="Five letter number ID" required>
</p>


<tr>
</td><input type="submit" name="submit" value="Add">
<input type="reset"></td>
</tr>
</form>

</body>
</html>
@endsection