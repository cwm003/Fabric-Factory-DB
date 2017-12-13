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
	<a class="list-group-item w3-bar-item w3-button w3-wide w3-right" href="/customers/page/<?php echo $page; ?>"><i class="fa fa-arrow-circle-left"></i>BACK</a>
    </a>
  </div>
</div>
</head>

<body>
<br>
<br>
<div style="margin-left:250px">
<h2>Insert Customer</h2></div>
	<form action='/customers/save/<?php echo $page; ?>' method="post" style="width:500px;font-weight:bold;margin-left:100px">
	<br>
	<p>
	<label>Customer_Name</label>
	<input class="w3-input" type="text" name="nameCus" required>
	</p>
	<p>
		<label>CustomerID</label>
		<input class="w3-input" type="text" name="customerID"
		pattern="[0-9]{3}" 
		title="Three letter number code" required>
	</p>
	<p>
		<label>Address</label>
		<input class="w3-input" type="text" name="Address" required>
	</p>
	<p>
		<label>Tel</label>
		<input class="w3-input" type="text" name="tel"
		pattern="[0-9]{10}" 
		title="Ten letter number phone" required>
	</p>

	<tr>
		<label><input type="submit" name="submit" value="Save"></td>
	</tr>	
	</form>

</body>
</html>
@endsection