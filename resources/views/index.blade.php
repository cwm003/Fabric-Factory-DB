@extends('layouts.out')

@section('content')
<!DOCTYPE html>
<html>
<title>PEECHADJANE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgpqeeiNU8HXz6Foa2z78CYn2W-3-GIUA&callback=initMap"
    async defer></script>
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Raleway", sans-serif
  }

  body,
  html {
    height: 100%;
    line-height: 1.8;
  }
  /* Full height image header */

  .bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("222.png"); 
    min-height: 80%;
  }

  .w3-bar .w3-button {
    padding: 16px;
  }
  #map {
        height: 100px;
        height: 100px;
        margin: 0;
        padding: 0;
      }

      
</style> 

<body>
  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
      <a class="list-group-item w3-bar-item w3-button w3-wide" href="#home"><i class="fa fa-home fa-fw"></i>PEECHADJANE</a>
      <!-- Right-sided navbar links -->
      <div class="w3-right w3-hide-small">
        <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
        <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
        <a href="login" class="w3-bar-item w3-button"><i class="fa fa-user"></i>LOGIN</a>
        <a href="statusCheck" class="w3-bar-item w3-button"><i class="fa fa-shopping-cart"></i> STATUS</a>
      </div>
      <!-- Hide right-floated links on small screens and replace them with a menu icon -->

      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
    </div>
  </div>

  <!-- Sidebar on small screens when clicking the menu icon -->
  <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button"> WORK</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
    <a href="login" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>
    <a href="statusCheck" onclick="w3_close()" class="w3-bar-item w3-button">STATUS</a>

  </nav>

  <!-- Header with full-height image -->
  <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home"></header>

  <!-- Work Section -->
  <div class="w3-container" style="padding:128px 16px" id="work">
    <h3 class="w3-center">OUR WORK</h3>
    <p class="w3-center w3-large">ตัวอย่างแบบเสื้อโปโล</p>

    <div class="w3-row-padding" style="margin-top:64px">
      <div class="w3-col l3 m6">
        <img src="01.gif" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="01">
      </div>
      <div class="w3-col l3 m6">
        <img src="02.gif" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="02">
      </div>
      <div class="w3-col l3 m6">
        <img src="03.gif" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="03">
      </div>
      <div class="w3-col l3 m6">
        <img src="04.gif" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="04">
      </div>
    </div>

    <div class="w3-row-padding w3-section">
      <div class="w3-col l3 m6">
        <img src="05.gif" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="05">
      </div>
      <div class="w3-col l3 m6">
        <img src="06.gif" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="06">
      </div>
      <div class="w3-col l3 m6">
        <img src="07.gif" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="07">
      </div>
      <div class="w3-col l3 m6">
        <img src="08.gif" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="08">
      </div>
    </div>
  </div>

  <div class="w3-container" style="padding:128px 16px">
    <p class="w3-center w3-large">ตัวอย่างแบบเสื้อคอกลมและคอวี</p>

    <div class="w3-row-padding" style="margin-top:64px">
      <div class="w3-col l3 m6">
        <img src="t1.gif" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
      </div>
      <div class="w3-col l3 m6">
        <img src="t2.gif" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
      </div>
      <div class="w3-col l3 m6">
        <img src="t3.gif" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
      </div>
      <div class="w3-col l3 m6">
        <img src="t4.gif" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
      </div>
    </div>

    <div class="w3-row-padding w3-section">
      <div class="w3-col l3 m6">
        <img src="t5.gif" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
      </div>
      <div class="w3-col l3 m6">
        <img src="t6.gif" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
      </div>
      <div class="w3-col l3 m6">
        <img src="t7.gif" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
      </div>
      <div class="w3-col l3 m6">
        <img src="t8.gif" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
      </div>
    </div>
  </div>
  <!--typecloth and size -->
  
 <div class="w3-container" style="margin-top:10px;margin-left:200px;margin-right:200px">
  <h2 class="w3-center">Size ผู้หญิง</h2>
  <table class="w3-table w3-striped w3-bordered w3-border">
    <thead class="w3-teal">
      <th style="width:50%" class="w3-center">Size name</th>
      <th class="w3-center">ขนาด</th>
    </thead>
    <tr>
      <td  class="w3-center">S</td>
      <td  class="w3-center">36</td>
    </tr>
    <tr>
      <td  class="w3-center">M</td>
      <td  class="w3-center">38</td>
    </tr>
    <tr>
      <td  class="w3-center">L</td>
      <td  class="w3-center">40</td>
    </tr>
    <tr>
      <td  class="w3-center">XL</td>
      <td  class="w3-center">42</td>
    </tr>
  </table>
  <h2 class="w3-center"> Size ผู้ชาย</h2>
  <table class="w3-table w3-striped w3-bordered w3-border">
      <thead class="w3-teal">
        <th style="width:50%" class="w3-center">Size name</th>
        <th class="w3-center"> ขนาด</th>
      </thead>
      <tr>
        <td  class="w3-center">S</td>
        <td  class="w3-center">38</td>
      </tr>
      <tr>
        <td class="w3-center">M</td>
        <td  class="w3-center">40</td>
      </tr>
      <tr>
        <td  class="w3-center">L</td>
        <td  class="w3-center">42</td>
      </tr>
      <tr>
        <td  class="w3-center">XL</td>
        <td  class="w3-center">44</td>
      </tr>
    </table>
    <br><br>
  </div>

  <p class="w3-center w3-padding-64">
        <h1 class="w3-center">COLOR CLOTH </h1>
        <div class="w3-row-padding" style="margin-top:64px;margin-left:250px">
          <div class="w3-col l3 m6">
            <img src="color1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
          </div>
          <div class="w3-col l3 m6">
            <img src="color2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
          </div>
          <div class="w3-col l3 m6">
            <img src="color3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
        </div>
    </p>
    </div>
    <br><br>


  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption" class="w3-opacity w3-large"></p>
    </div>
  </div>


  <!-- Contact Section -->
  <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
    <h3 class="w3-center">CONTACT</h3>
    <div class="w3-row-padding" style="margin-top:64px;margin-left:200px">
      <div>
        <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i>142/8 ม.15 ถ.สันโค้งน้อย 9 ต.เวียง อ.เมือง ตำบล
          รอบเวียง อำเภอเมืองเชียงราย เชียงราย 57000</p>
        <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: 0816024777</p>
        <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: mrsetdusit@hotmail.com</p>
        <div class="w3-xlarge w3-section" style="margin-left:150px">
          <p><a href="https://www.facebook.com/profile.php?id=100001381451778" title="ทำเสื้อสวยจีดีไชน์" target="_blank" class="w3-hover-text-green"> <i class="fa fa-facebook-official w3-hover-opacity"></i></a></p>
        </div>
      </div>
      <!-- <div class="w3-half"> -->
        <!-- Add Google Maps -->
        <!-- <div id="googleMap" class="w3-greyscale-max" style="width:50%;height:510px;"></div> -->
      <!-- </div> -->
    </div>
  </div>
  <!-- <div style="height:100%; width:100%;">
  <div id="map" ></div>
  </div> -->
  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-64">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    
  </footer>
  
   <script>

    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }


    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
      if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
      } else {
        mySidebar.style.display = 'block';
      }
    }

    // Close the sidebar with the close button
    function w3_close() {
      mySidebar.style.display = "none";
    }

  </script> 

  <!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>

</html>
@endsection