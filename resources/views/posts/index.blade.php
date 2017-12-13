@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title">Post</h1>
  <p class="lead blog-description">All posts should belong here.</p>
  <div class="table-responsive">
    <table class="table">
    <center><h1> แผนกตัดผ้า  </h1></center>
    <tr>
        <th>จำนวนที่ทำเสร็จ</th>
        <th>งานปัจจุบัน</th>
        <th>OrderID</th> 
        <th>จำนวน</th>     
        <th>แก้ไข</th>   
        <th>ลบ</th>     
          

    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
      <tr>
            <td><a href="ordercut_table.php?id=<?=$row["OrderCutID"]?>"><?=$row["current_complete"]?></a></td>
            <td><a href="ordercutomer_table.php?id=<?=$row["OrderCutID"]?>"><?=$row["OrderID"]?></a></td>
            <td><a href="ordercut_table.php?id=<?=$row["OrderCutID"]?>"><?=$row["orderID"]?></a></td>
            <td><a href="ordercut_table.php?id=<?=$row["OrderCutID"]?>"><?=$row["total"]?></a></td>
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