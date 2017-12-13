@extends('layouts.nana')

@section('content')
<!DOCTYPE html>
<html>
<title>MANAGER</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: "Poppins", sans-serif
    }

    body {
        font-size: 16px;
    }

    .w3-half img {
        margin-bottom: -6px;
        margin-top: 16px;
        opacity: 0.8;
        cursor: pointer
    }

    .w3-half img:hover {
        opacity: 1
    }
    .mySlides {display:none;}
</style>

<body>

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;background:#ff4d88"
        id="mySidebar"><br>
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
        <div class="w3-container">
            <h3 class="w3-padding-64"><b>PEECHADJANE</b></h3>
        </div>
        <div class="w3-bar-block">
            <a href="/" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
            <a href="/login" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><i class="fa fa-arrow-circle-left"></i>LOG OUT</a>
            <a href="/ordercustomers/page/managerOrderCustomer" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Current Work</a>
            <a href="/employees/page/managerOrderCustomer" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Employees</a>
            <div class="w3-xlarge w3-section">
                <p><a href="https://www.facebook.com/profile.php?id=100001381451778" title="ทำเสื้อสวยจีดีไชน์" target="_blank" class="w3-hover-text-pink"> <i class="fa fa-facebook-official w3-hover-opacity"></i></a></p>
            </div>
        </div>
    </nav>

    <!-- Top menu on small screens -->
    <header class="w3-container w3-top w3-hide-large w3-xlarge w3-padding" style="background:#ff4d88">
        <a href="javascript:void(0)" class="w3-button w3-margin-right" style="background:#ff0055" onclick="w3_open()">☰</a>
        <span>PEECHADJANE</span>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:340px;margin-right:40px">

        <!-- Header -->
            <br>
            <br>
            <h1 class="w3-jumbo" style="margin-top:70px"><b>MANAGER ORDERCUSTOMER</b></h1>
            <div class="w3-content w3-section" style="max-width:800px">
                <img class="mySlides" src="/01.gif" style="width:100%">
                <img class="mySlides" src="/02.gif" style="width:100%">
                <img class="mySlides" src="/03.gif" style="width:100%">
                <img class="mySlides" src="/04.gif" style="width:100%">
                <img class="mySlides" src="/05.gif" style="width:100%">
                <img class="mySlides" src="/06.gif" style="width:100%">
                <img class="mySlides" src="/07.gif" style="width:100%">
                <img class="mySlides" src="/08.gif" style="width:100%">
                <img class="mySlides" src="/09.gif" style="width:100%">
                <img class="mySlides" src="/10.gif" style="width:100%">
                <img class="mySlides" src="/t1.gif" style="width:100%">
                <img class="mySlides" src="/t2.gif" style="width:100%">
                <img class="mySlides" src="/t3.gif" style="width:100%">
                <img class="mySlides" src="/t4.gif" style="width:100%">
                <img class="mySlides" src="/t5.gif" style="width:100%">
                <img class="mySlides" src="/t6.gif" style="width:100%">
                <img class="mySlides" src="/t7.gif" style="width:100%">
                <img class="mySlides" src="/t8.gif" style="width:100%">
            
            </div>
        </div>

    <script>
    var myIndex = 0;
            carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
        // Script to open and close sidebar
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }

        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }

    </script>

</body>

</html>
@endsection