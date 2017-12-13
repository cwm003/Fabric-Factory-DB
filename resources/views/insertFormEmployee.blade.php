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
    <a class="list-group-item w3-bar-item w3-button w3-wide w3-right" href="/employees/page/<?php echo $page; ?>"><i class="fa fa-arrow-circle-left"></i>BACK</a>
    </a>
  </div>
</div>
</head>
<body>
<br>
<br>
<div style="margin-left:250px">
<h2>Insert Employee</h2></div>
	<form action='/employees/save/<?php echo $page; ?>' method="post" style="width:500px;font-weight:bold;margin-left:100px">
    <br>
	<p>
        <label>Employee ID</label>
        <?php if($page == 'managerCut') {?>
            <input class="w3-input" type="text" name="employeeID"
            pattern="^200[0-9]{7}" 
            title="Start with department id 200 and seven letter number code" required>
        <?php }else if($page == 'managerOrderCustomer') {?>
            <input class="w3-input" type="text" name="employeeID"
            pattern="^100[0-9]{7}" 
            title="Start with department id 100 and seven letter number code" required>
        <?php }else if($page == 'managerSew') {?>
            <input class="w3-input" type="text" name="employeeID"
            pattern="^300[0-9]{7}" 
            title="Start with department id 300 and seven letter number code" required>
        <?php }else if($page == 'managerOrderCloth') {?>
            <input class="w3-input" type="text" name="employeeID"
            pattern="^001[0-9]{7}" 
            title="Start with department id 001 and seven letter number code" required>
        <?php } ?>
    </p>
    <p>
        <label>FirstName</label>
        <input class="w3-input" type="text" name="Fname" required>
    </p>
    <p>
        <label>LastName</label>
        <input class="w3-input" type="text" name="Lname" required>
    </p>

    <p>
        <label>Password</label>
        <input class="w3-input" type="text" name="password" pattern="[0-9a-zA-Z]{8,50}" 
        title="At least eight letter number code" required>
    </p>

    <p>
        <label>Social Security Number</label>
        <input class="w3-input" type="text" name="Ssn"
        pattern="[0-9]{13}" 
        title="Thirteen letter number code" required>
    </p>
    <p>
        <label>Department ID</label>
        <?php if($page == 'managerCut') {?>
            <input class="w3-input" type="text" name="departmentID"
            pattern="^200" 
            title="Department id = 200" required>
        <?php }else if($page == 'managerOrderCustomer') {?>
            <input class="w3-input" type="text" name="departmentID"
            pattern="^100" 
            title="Department iD = 100" required>
        <?php }else if($page == 'managerSew') {?>
            <input class="w3-input" type="text" name="departmentID"
            pattern="^300" 
            title="Department id = 300" required>
        <?php }else if($page == 'managerOrderCloth') {?>
            <input class="w3-input" type="text" name="departmentID"
            pattern="^001" 
            title="Department id = 001" required>
        <?php } ?>
    </p>
    <p>
        <label>Age</label>
        <input class="w3-input" type="text" name="age" required>  
    </p>
    <p>
        <label>Hire Date</label>
        <input class="w3-input" type="date" name="hire_date" required>
    </p>
    <p>
        <label>Tel</label>
        <input class="w3-input" type="text" name="tel"
        pattern="[0-9]{10}" 
        title="Ten letter number phone" required>
    </p>
    <p>
        <label>Address</label>
        <input class="w3-input" type="text" name="address" required>
    </p>
    <p>
        <label>Gender</label><br>
        <input type="radio" name="gender" value="male" checked> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            <input type="radio" name="gender" value="other"> Other
    </p>
    <p><br>
        <label>Salary</label>
        <input class="w3-input" type="text" name="salary" required>
    </p>
    <p>
        <label>Position</label>
        <input type="radio" name="position" value="employee" checked> Employee<br>
        
    </p>
    <tr>
    <label><input type="submit" name="submit" value="Save"></td>
</tr>
	</form>

</body>
</html>
@endsection