@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> ข้อมูลพนักงาน  </h1>
  <p class="lead blog-description">All posts should belong here.</p>
  <div class="table-responsive">
    <table class="table">
    <tr>
        <th>รหัสพนักงาน</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th> 
        <th>เลขบัตรประจำตัวประชาชน</th>     
        <th>แผนก</th>
        <th>วันที่เริ่มทำงาน</th>
        <th>เงินเดือน</th>
        <th>ตำแหน่ง</th>
        <th>แก้ไข</th>   
        <th>ลบ</th>     
          

    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
      <tr>
            <td><a href="employee_table.php?id=<?=$row["employeeID"]?>"><?=$row["employeeID"]?></a></td>
            <td><a href="employee_table.php?id=<?=$row["employeeID"]?>"><?=$row["Fname"]?></a></td>
            <td><a href="employee_table.php?id=<?=$row["employeeID"]?>"><?=$row["Lname"]?></a></td>
            <td><a href="employee_table.php?id=<?=$row["employeeID"]?>"><?=$row["Ssn"]?></a></td>
            <td><a href="employee_table.php?id=<?=$row["employeeID"]?>"><?=$row["departmentID"]?></a></td>
            <td><a href="employee_table.php?id=<?=$row["employeeID"]?>"><?=$row["hire_date"]?></a></td>
            <td><a href="employee_table.php?id=<?=$row["employeeID"]?>"><?=$row["salary"]?></a></td>
            <td><a href="employee_table.php?id=<?=$row["employeeID"]?>"><?=$row["position"]?></a></td>
            <td>รอลิงก์สมาย</td>
            <td>รอลิงก์สมาย</td>
      </tr>
    <?php endwhile: ?>
    </table>
    </div>
  @foreach ($posts as $post)
   
    
   
  @endforeach
</div>

@endsection