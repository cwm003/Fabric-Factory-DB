
@extends('layouts.out')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>EMPLOYEES SEWS</title>
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
    <a class="list-group-item w3-bar-item w3-button w3-wide w3-right" href="ceo"><i class="fa fa-arrow-circle-left"></i>BACK</a>
    </a>
  </div>
</div>
</head>
<body>


<form action='/employees/sews' method="get">
<br>

<div class="w3-container" style="margin-top:80px">
<h1 class="blog-title">All Employee</h1>
<table class="w3-table w3-striped w3-border w3-border">
    <thead class="w3-teal">
   
    <th><center>รหัสพนักงาน</th>
    <th><center>ชื่อ</th>
    <th><center>นามสกุล</th> 
    <th><center>เลขบัตรประจำตัวประชาชน</th>    
    <th><center>แผนก</th>
    <th><center>อายุ</th>  
    <th><center>วันที่เริ่มทำงาน</th>
    <th><center>เบอร์โทรศัพท์</th> 
    <th><center>เพศ</th> 
    <th><center>เงินเดือน</th>
    <th><center>ตำแหน่ง</th>
    <th><center>แก้ไข</th>   
    <th><center>ลบ</th> 
    </thead>  

        @foreach ($employees as $employee)
           
			<tr>
			<td width="10%"><center>{{$employee->employeeID}}</center></td>
			<td><center>{{$employee->Fname}}</center></td>
            <td width="10%"><center>{{$employee->Lname}}</center></td>
            <td><center>{{$employee->Ssn}}</center></td>
            <td>
            <center>{{$employee->departmentID}}</center>
            </td>
            <td><center>{{$employee->age}}</center></td>
            <td><center>{{$employee->hire_date}}</center></td>
            <td><center>{{$employee->tel}}</center></td>
            <td><center>{{$employee->gender}}</center></td>
            <td><center>{{$employee->salary}}</center></td>
            <td><center>{{$employee->position}}</center></td>

			<td><center><a href="/employees/<?php echo $employee->employeeID; ?>/editpage/<?php echo $page; ?>" > <i class="fa fa-pencil fa-fw" aria-hidden="true"></i></a></center></td>
			<td><center><a href="/employees/<?php echo $employee->employeeID; ?>/delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a></center></td>

			</tr>
            
        @endforeach

	</table><br>


    
	<a href="/employees/insertpage/<?php echo $page; ?>"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Employee</a>
    <br>
    <br>
	<!--<form action='/customers/insertpage' method ="get"><input type="submit" value="Add Customer"></form>-->
	
    </form>
    </body>
    
</div>
    </html> 
    @endsection

