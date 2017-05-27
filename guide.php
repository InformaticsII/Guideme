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
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/section.css">
    <link rel="stylesheet" href="assets/css/services.css">
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
				<a class="navbar-brand" href="index.html" title="HOME"> Guide <span>me</span></a>
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

<!-- Section Background -->
	<section class="section-background">
		<div class="container">
			<h2 class="page-header">
				"Make your trip worth it..."
			</h2>
			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
			</ol>
		</div> <!-- /.container -->
	</section> <!-- /.section-background -->

	<section class="additional-services section-wrapper">
		<div class="container">
			<h3 class="section-title" style="">
        Explore your dreams with the best and the most experienced guides present
      </br> around you..

   </p>
 </h3>
			<p class="section-subtitle">

			</p>

		</div> <!-- /.container -->
	</section> <!-- /.End of guide description -->

<!-- /guides and booking of guides -->

	<section class="section-wrapper services-owl">
		<div class="container">
			<div class="owl-carousel services-owl-carousel row">
		<div class="item col-sm-8 col-sm-offset-2">
					<div class="item-name">

					<img src="assets/images/niraj.jpg">
						Niraj Punn
					</div>
					<p class="item-detail">

					Age-23 yrs    &nbsp&nbsp &nbsp&nbsp  Professional guide &nbsp&nbsp
					Speciality : cultural and historical places
					</p>
					<button class="btn custom-btn">
																Book now for $5 for a day
								</button>
				</div> <!-- /.item -->
	<div class="item col-sm-8 col-sm-offset-2">
					<div class="item-name">

						<img src="assets/images/srijana.jpg" >
							Shrijana Paudel
					</div>
					<p class="item-detail">

					Age-30 yrs    &nbsp&nbsp &nbsp&nbsp  Multilingual guide &nbsp&nbsp
					Speciality : Adventural sites and activities
					</p>
					<button class="btn custom-btn">
																Book now for $10 for a day
								</button>
				</div> <!-- /.item -->
				<div class="item col-sm-8 col-sm-offset-2">
					<div class="item-name">

					<img src="assets/images/sager.jpg" >
						Sagar Thapa
					</div>
					<p class="item-detail">

					Age-30 yrs    &nbsp&nbsp &nbsp&nbsp Guide &nbsp&nbsp
					Speciality : Sceneric landscapes and places
					</p>
					<button class="btn custom-btn">
																Book now for $3 for a day
								</button>
				</div> <!-- /.item -->

			</div> <!-- /.services-owl-carousel -->
		</div> <!-- /.container -->
	</section> <!-- /.services-owl -->

		<!--Find help-->
	<div class="section-wrapper sponsor">
		<div class="container">
		<div class="brand-logo">			<button class="btn custom-btn">Help</button></div>


		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">


						<?php
						$conn_error='couldnot connect';
						$mysql_host='localhost';
						$mysql_user='root';
						$mysql_pass='';
						$mysql_db='test';

						if (!@mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!@mysql_select_db($mysql_db)){
						die ($conn_error);
						}
						?>
						<form action="guide.php" method="GET">
						choose which stared hotels details you want to get:
						<div class="col-md-12"><select class="form-control" name="star">
						<option value="1">1 stared</option>
						<option value="2">2 stared</option>
						<option value="3">3 stared</option>
						<option value="4">4 stared</option>
						<option value="5">5 stared</option>
						</select>
					</div><br><br>
						<input type="submit" value="submit">
						</form>
						<?php

						if (isset($_GET['star'])&&!empty($_GET['star']))
						{
						 $star = $_GET['star'];
							if($star == 1 || $star == 2 ||$star == 3 ||$star == 4 ||$star == 5 ){

						$query1 = "SELECT name,starred,address,official_website FROM hotel WHERE starred = $star ORDER BY id ";
						if ($query_run1 = mysql_query($query1)){
							while ($query_row1 =mysql_fetch_assoc($query_run1)){
									$name = $query_row1['name'];
									$starred = $query_row1['starred'];
									$address = $query_row1['address'];
									$web = $query_row1['official_website'];

								echo $name."<br>";
								echo "The hotel holds".$starred."out of 5 stars <br>";
								echo "The address of hotel is ".$address."</a><br>";
								echo "The official website of hotel is "."<a href='$web'>".$web."</a><br><br><br><br>";
							}
						}
						else {
							echo "failed";
						}}}
						?>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-xs-4">
						<div class="text-left">
	<button class="btn custom-btn">Help</button></div>

<br>

						</div>
					</div>

					<div class="col-xs-4">
						<!-- <div class="top">
							<a href="#header">
								<i class="ion-arrow-up-b"></i>
							</a>
						</div> -->
					</div>
				</div>
			</div>
		</footer>


	<script src="assets/js/jquery-1.11.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/contact.js"></script>
	<script src="assets/js/script.js"></script>






</body>
</html>
