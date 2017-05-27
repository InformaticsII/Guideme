<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
		<!-- meta -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
	<title>Guide.me</title>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/owl.theme.css">
	<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css">
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
				<script src="assets/js/html5shiv.js"></script>
				<script src="assets/js/respond.js"></script>
			<![endif]-->

			<!--[if IE 8]>
		    	<script src="assets/js/selectivizr.js"></script>
		    <![endif]-->
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php" title="HOME"> Guide<span>.ME</span></a>
			</div> <!-- /.navbar-header -->

	    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="bestplace.php">Best places to go</a></li>
					<li><a href="guide.php">plan your trip</a></li>
				</ul> <!-- /.nav -->
		    </div><!-- /.navbar-collapse -->
	  	</div><!-- /.container -->
	</nav>

	<!-- Top place to visit -->
		<section class="visit section-wrapper">
			<div class="container" id="googleMap" style="width:100%;height:600px;">
	        <!--map -->
	        <script>
	        function myMap() {
	          var mapCanvas = document.getElementById("googleMap");

	          var myCenter = new google.maps.LatLng(28.2011,83.9451);
	          var sarankot_para = new google.maps.LatLng(28.244197,83.948185);
						var zipflyer = new google.maps.LatLng(28.259004,83.953990);
						var bindabasini = new google.maps.LatLng(28.237474,83.984245);
						var supermarket = new google.maps.LatLng(28.220391,83.986230);
						var phewacity = new google.maps.LatLng(28.206701,83.981616);
						var armycamp = new google.maps.LatLng(28.223931,83.993547);
						var buspark = new google.maps.LatLng(28.213199,83.975490);

	          var mapOptions = {center: myCenter, zoom: 15};
	          var map = new google.maps.Map(mapCanvas,mapOptions);

						//marker one
	          var marker = new google.maps.Marker({
	            position: myCenter,
	            icon: "assets/images/fav_locations_icons/pokhara/gumba.png"
	          });

						//marker second
						var marker2 = new google.maps.Marker({
	            position: sarankot_para,
	            icon: "assets/images/fav_locations_icons/pokhara/paragliding.png"
	          });

						//marker three
						var marker3 = new google.maps.Marker({
	            position: zipflyer,
	            icon: "assets/images/fav_locations_icons/pokhara/zipslider.png"
	          });
						//marker four
						var marker4 = new google.maps.Marker({
	            position: bindabasini,
	            icon: "assets/images/fav_locations_icons/pokhara/bindabasini.png"
	          });
						//marker five
						var marker5 = new google.maps.Marker({
	            position: supermarket,
	            icon: "assets/images/fav_locations_icons/pokhara/supermarket.png"
	          });
						//marker six
						var marker6 = new google.maps.Marker({
	            position: phewacity ,
	            icon: "assets/images/fav_locations_icons/pokhara/hospital.png"
	          });
						//marker seven
						var marker7 = new google.maps.Marker({
	            position:armycamp,
	            icon: "assets/images/fav_locations_icons/pokhara/armycamp.png"
	          });
						//marker eight
						var marker8 = new google.maps.Marker({
	            position:buspark,
	            icon: "assets/images/fav_locations_icons/pokhara/buspark.png"
	          });
						infoWindow = new google.maps.InfoWindow;

		        // geolocation.
		        if (navigator.geolocation) {
		          navigator.geolocation.getCurrentPosition(function(position) {
		            var pos = {
		              lat: position.coords.latitude,
		              lng: position.coords.longitude
		            };

		            infoWindow.setPosition(pos);
		            infoWindow.setContent('<font color="black">Your are here!</font>');
		            infoWindow.open(map);
		            map.setCenter(pos);
		          }, function() {
		            handleLocationError(true, infoWindow, map.getCenter());
		          });
		        } else {
		          // Browser doesn't support Geolocation
		          handleLocationError(false, infoWindow, map.getCenter());
		        }
            ///end of geolocation

	          marker.setMap(map);
						marker2.setMap(map);
						marker3.setMap(map);
						marker4.setMap(map);
						marker5.setMap(map);
						marker6.setMap(map);
						marker7.setMap(map);
						marker8.setMap(map);

	          var infowindow = new google.maps.InfoWindow({
	           content: "<style>.main{width:120px;}.left_image{float:left;width:80px;}}</style><div class='main'><div class='left_image'><a href='peace.php'><img src='assets/images/fav_locations_icons/pokhara/para.jpg'></a></div>"
					 });

	          infowindow.open(map,marker2);
	        }
	        </script>
			</div>
		</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<div class="text-left">
						&copy; Copyright
					</div>
				</div>
				<div class="col-xs-4">

				</div>
				<div class="col-xs-4">
					<div class="top">
						<a href="#header">
							<i class="ion-arrow-up-b"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<script src="assets/js/jquery-1.11.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/jquery.flexslider.js"></script>
	<script src="assets/js/script.js"></script>

	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpb0CplLXpUusLKxEt5156DPxMnEplRUw&callback=myMap"></script>




</body>
</html>
