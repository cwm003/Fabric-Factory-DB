
@extends('layouts.out')

@section('content')
<!DOCTYPE html>
<html>
<title>STATUS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
</style>

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar"> 
    <a class="list-group-item w3-bar-item w3-button w3-wide" href="/"><i class="fa fa-home fa-fw"></i>PEECHADJANE</a>
    <a class="list-group-item w3-bar-item w3-button w3-wide w3-right" href="/statusCheck"><i class="fa fa-arrow-circle-left"></i>BACK</a>
    </a>
  </div>
</div>

<div class="w3-container" style="margin-top:80px;margin-left:200px;margin-right:200px">
<h1 class="w3-jumbo w3-center"><b>Status Order</b></h1>
<br>
    <center><h2>OrderID : {{$id}}</center></h2>
    <br><Br>
            <table class="w3-table w3-centered w3-striped w3-border">
                <thead class="w3-teal">
                 <th>Order Cloth</th>
                 <th>Order Cut</th>
                 <th>Order Sew</th>
                </thead>
                <tr>
                 <td>{{$statusordercloth}}</td>
                 <td>{{$statusordercut}}</td>
                 <td>{{$statusordersew}}</td>
                </tr>
            </table>
<center>
<br><Br>
            
            <br>
            <font face = "Cursive" size =" 4">Order Complete : </font>
            
            <font face = "Cursive" size ="6">  {{$statusorder}}</font>
    
</div>

</body>
</html>
@endsection