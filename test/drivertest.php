<?php 

/*
	Initial prototype of Driver's App for Unstabnet Vehicle Booker 
	(https://vehiclebooker.unstabnet.in)

    Author: Shreyak Chakraborty (C) 2020
*/

$googlekey = "AIzaSyBh1m5LWl-qV1nVkT1WZeWAzng5eP42RNk"; // API key for google Geocoding API


$location = array(28.6828082,77.3121354);



// view related
$pageTitle  = "Vehicle Booker Driving Prototype";

?>




<!DOCTYPE html>
<html>
<head>
	<title><?=$pageTitle?></title>
	     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
           integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
           crossorigin=""/>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

       <style type="text/css">
       	#mapid { 
       	    height: 400px; 
       	    width: 800px;
       	}
       </style>
</head>
<body>
    <div class="container-fluid">
    	<div class="row">
    		<h3 align="center"><?=$pageTitle?></h3>
    	</div> <br><br>
    	<div class="row">
    		<div id="mapid"></div>
    	</div>
     	<br><br>
     	<div class="row">
     	   <nav class="navbar navbar-default fixed-bottom">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#"><b>Driver Actions</b></a>
                </div>
                <ul class="nav navbar-nav">
                  <li><a href="#">Start Ride</a></li>
                  <li><a href="#">End Ride</a></li>
                </ul>
              </div>
            </nav>
     	</div>
     	</div>
	</div>
    
    
    
 
	<!-- Make sure you put this AFTER Leaflet's CSS -->
 	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>

   <script type="text/javascript">
   		var zoomlevel = 15;
   		var startpoint = [<?=$location[0]?>, <?=$location[1]?>];
   		
   		var mymap = L.map('mapid').setView(startpoint, zoomlevel);
   		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(mymap);
		
		var startmarker = L.marker(startpoint).addTo(mymap);
        startmarker.bindPopup("<b>Start Point</b>");

   </script>
</body>
</html>