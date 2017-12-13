@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> ข้อมูลลูกค้า  </h1>
  <p class="lead blog-description">All posts should belong here.</p>
  <div class="table-responsive">
    <table class="table">
    <tr>
        <th>รหัสลูกค้า</th>
        <th>ชื่อ</th>
        <th>ที่อยู่</th>     
        <th>เบอร์โทร</th>
        <th>แก้ไข</th>   
        <th>ลบ</th>     
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
      <tr>
            <td><a href="customer_table.php?id=<?=$row["customerID"]?>"><?=$row["customerID"]?></a></td>
            <td><a href="customer_table.php?id=<?=$row["customerID"]?>"><?=$row["nameCus"]?></a></td>
            <td><a href="customer_table.php?id=<?=$row["customerID"]?>"><?=$row["Address"]?></a></td>
            <td><a href="customer_table.php?id=<?=$row["customerID"]?>"><?=$row["tel"]?></a></td>
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