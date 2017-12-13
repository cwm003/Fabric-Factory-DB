@extends('layouts.out')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>ALL STATUS CHECK</title>
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
    <a class="list-group-item w3-bar-item w3-button w3-wide w3-right" href="/customers"><i class="fa fa-arrow-circle-left"></i>BACK</a>
    </a>
  </div>
</div>
</head>

<body>
    <form action='/customers/<?php echo $id; ?>' method="get">
	<br>
    <div class="w3-container" style="margin-top:80px">
	<h1 class="blog-title">All Customer</h1>
    <table class="w3-table w3-striped w3-border w3-border">
    <thead class="w3-teal">
    <th>รหัสลูกค้า</th>
    <th>ชื่อลูกค้า</th>
    <th>ที่อยู่ลูกค้า</th>
    <th>เบอร์โทรศัพท์ติดต่อ</th>
    </thead> 
    
        @foreach ($customers as $customer) 
			<tr>
            <td><center>{{$customer->customerID}}</center></td>
            <td><center>{{$customer->nameCus}}</center></td>
            <td><center>{{$customer->Address}}</center></td>
			<td><center>{{$customer->tel}}</center></td>
            </tr>
        @endforeach
	
	</table>
	</form>
	

</body>
</html>
@endsection

<!--customercontroller 
 public function linktocus($id){
			$cus = Customer::findOrfail($id);
			return view('dataCustomer')->with('ordercustomers',$orcus);
		} -->


<!--route
         $router->get('/ordercuts/{id}','OrdercutController@linktoordercus'); -->