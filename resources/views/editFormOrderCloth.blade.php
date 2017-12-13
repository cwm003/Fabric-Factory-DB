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
    <a class="list-group-item w3-bar-item w3-button w3-wide w3-right" href="/ordercloths/page/<?php echo $page; ?>"><i class="fa fa-arrow-circle-left"></i>BACK</a>
    </a>
  </div>
</div>
</head>
<body>
<br>
	<br>
    <div style="margin-left:250px">
	<h2>Edit OrderCloth</h2></div>
	<form action='/ordercloths/<?php echo $id; ?>/editsave/<?php echo $page; ?>' method="post" style="width:500px;font-weight:bold;margin-left:100px">
    <br>
	<p>
    <tr><td>OrderID :</td>
	<td>{{$ordercloth->OrderID}} </td></tr><br>
    <tr><td>Order cloths ID :</id>
	<td>{{$id}} </td></tr>
    </p>

    <!-- 
	<p>
        <label>ชื่อโรงงาน</label>
        <label><input type="text" name="factory_id" 
        pattern="[0-9]{4}" 
        title="Fours letter number code" required></label>
    </p> -->
    
	<p>
        <label>น้ำหนักผ้า</label>
        <input class="w3-input" type="text" name="weight_cloth" required>
    </p>
    
	<p>
        <label>ประเภทของผ้า</label>
       <select name="type_cloth" >
            <option value="TC">TC</option>
            <option value="TK">TK</option>
            <option value="Cotton">Cotton</option>
            </select>
    </p> 
    
	<p>
        <label>วันที่สั่ง</label>
        <input class="w3-input" type="date" name="startorder" required>
    </p>
    
	<p>
        <label>วันที่ส่ง</label>
        <input class="w3-input" type="date" name="date_tranfer" required>
    </p>

    
	<p>
        <label>วันที่ได้รับ</label>
        <input class="w3-input" type="date" name="date_recv" required>
    </p>
    
	<p>
        <label>ความกว้าง</label>
        <input class="w3-input" type="text" name="width_cloth" required>
    </p>
    
	<p>
        <label>จำนวนพับ</label>
        <input class="w3-input" type="text" name="folding" required>
    </p>
    
	<p>
        <label>ราคาต่อพับ</label>
        <input class="w3-input" type="text" name="unit_folding" required>
    </p>
    <!--
	<p>
        <label>สถานะ</label>
        <label><input type="radio" name="status" value="1"> Done.<br>
            <input type="radio" name="status" value="0" > Not yet.<br>
        </label>
	</p>-->
    <tr>
    </td><input type="submit" name="submit" value="Add">
    <input type="reset"></td>
</tr>
	</form>

</body>
</html>
@endsection