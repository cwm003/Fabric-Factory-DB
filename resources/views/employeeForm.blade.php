
@extends('layouts.out')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>EMPLOYEES FORM</title>
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


<form action='/employee' method="get">
<br>

<div class="w3-container" style="margin-top:80px">
<h1 class="blog-title">All Employee</h1>
<table class="w3-table w3-striped w3-border w3-border">
    <thead class="w3-teal">
   
    <th>รหัสพนักงาน</th>
    <th>ชื่อ</th>
    <th>นามสกุล</th> 
    <th>เลขบัตรประจำตัวประชาชน</th>    
    <th>แผนก</th>
    <th>อายุ</th>  
    <th>วันที่เริ่มทำงาน</th>
    <th>เบอร์โทรศัพท์</th> 
    <th>เพศ</th> 
    <th>เงินเดือน</th>
    <th>ตำแหน่ง</th>
    <th>แก้ไข</th>   
    <th>ลบ</th> 
    
    </thead>  

        @foreach ($employees as $employee)
           
			<tr>
			<td>{{$employee->employeeID}}</td>
			<td>{{$employee->Fname}}</td>
            <td>{{$employee->Lname}}</td>
            <td>{{$employee->Ssn}}</td>
            <td>{{$employee->departmentID}}</td>
            <td>{{$employee->age}}</td>
            <td>{{$employee->hire_date}}</td>
            <td>{{$employee->tel}}</td>
            <td>{{$employee->gender}}</td>
            <td>{{$employee->salary}}</td>
            <td>{{$employee->position}}</td>

			<td><a href="/employees/<?php echo $employee->employeeID; ?>/editpage/<?php echo $page; ?>" > <i class="fa fa-pencil fa-fw" aria-hidden="true"></i></a></td>
			<td><a href="/employees/<?php echo $employee->employeeID; ?>/delete/<?php echo $page; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>

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

