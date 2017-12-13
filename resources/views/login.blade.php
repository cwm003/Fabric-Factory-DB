@extends('layouts.nana')

@section('content')
<!DOCTYPE html>
<html>
<title>LOGIN</title>
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
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
    </a>
  </div>
</div>

<header class="bgimg-1 w3-grayscale-min" id="home">
    <div class="w3-text-indigo" style="padding:48px">
      <h3 class="w3-center w3-large">LOGIN FOR STAFF</h3>
      <p class="w3-center w3-large">กรุณากรอกรหัสพนังงาน</p>
    </div> 
</header>

<form action='/login/result' method="post">
<div class="input-group margin-bottom-sm w3-center">
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input class="form-control" type="text" name="id" placeholder="employeeID" required>
      </div>
      <br>
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
        <input class="form-control" type="password" name="pwd" placeholder="password" required>
      </div>
</div>



<p>
    <div class="w3-center">
        <button class="  w3-button w3-black" type="submit">
          <i class="fa fa-user"></i>LOGIN
        </button>
    </div>
</p>


</body>
</html>
@endsection
