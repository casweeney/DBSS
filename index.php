<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Welcome :: Don Bosco Secondary School Obosi</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="img/dbss.jpg">
		<link rel="stylesheet" href="css/dbss.css" type="text/css">
		<link href="css/bootstrap.css" rel="stylesheet" />
		<script type="text/javascript" src="jquery/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/dbss.js"></script>
		<script type="text/javascript" src="fancybox/lib/jquery.mousewheel.pack.js"></script>
		<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
		<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js"></script>
		<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
		<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
		<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js"></script>
		<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
		<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
		<script src="js/fancytech.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$(".fancybox").fancybox();
			});
		</script>
	</head>
	<body>
		
		<?php
			require_once("includes/header.php");
		?>
		
		<!----Navigation Section---->
		<nav class="navbar navbar-default shadow_bottom">
			<div class="container-fluid">
				<!---Brand and toggle get grouped for better mobile display--->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="gallery.php"><span class="glyphicon glyphicon-picture"></span> Gallery</a></li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-book"></span> Academics <span class="caret"></span></a>
						  <ul class="dropdown-menu">
							<li><a href="enrolment.php"><span class="glyphicon glyphicon-usd"></span> Pricing</a></li>
							<li><a href="enrolment.php"><span class="glyphicon glyphicon-book"></span> Enrollment</a></li>
							<li><a href="registration.php"><span class="glyphicon glyphicon-list"></span> Registration</a></li>
							<li><a href="administration.php"><span class="glyphicon glyphicon-pencil"></span> Administration</a></li>
						  </ul>
						</li>
						<li><a href="gallery.html"><span class="glyphicon glyphicon-road"></span> School Facilities</a></li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-bullhorn"></span> Broadcast <span class="caret"></span></a>
						  <ul class="dropdown-menu">
							<li><a href="board.php"><span class="glyphicon glyphicon-th-list"></span> Notice Board</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="calendar.php"><span class="glyphicon glyphicon-calendar"></span> School calendar</a></li>
						  </ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> Portal <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><span class="glyphicon glyphicon-credit-card"></span> Result Checker</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-user"></span> Staff Login</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Student Login</a></li>
							</ul>
						</li>
					</ul>
				</div> <!-- End of navbar-collapse -->
			</div> <!-- End of container-fluid -->
		</nav>
		
		<!----Banner Section----->
		<div class="container-fluid text-center">
			<div id="myCarousel" class="carousel slide" data-interval="4000" data-ride="carousel">
				
				<!--Carousel Indicator---->
				<ol class="carousel-indicators">
					<li class="active" data-target="#myCarousel" data-slide-to="0"></li>
					<li class="" data-target="#myCarousel" data-slide-to="1"></li>
					<li class="" data-target="#myCarousel" data-slide-to="2"></li>
					<li class="" data-target="#myCarousel" data-slide-to="3"></li>
					<li class="" data-target="#myCarousel" data-slide-to="4"></li>
					<li class="" data-target="#myCarousel" data-slide-to="5"></li>
					<li class="" data-target="#myCarousel" data-slide-to="6"></li>
					<li class="" data-target="#myCarousel" data-slide-to="7"></li>
				</ol>
				
				<!--Carousel Items---->
				<div class="carousel-inner slide_frame">
					<div class="item active">
						<img src="img/1.jpg" alt="" class="img-responsive">
						<div class="carousel-caption">
							<h3>Principal's Address</h3>
							<p>Daily assembly devotional with God</p>
						</div>
					</div>
					<div class="item">
						<img src="img/2.jpg" alt="" class="img-responsive">
						<div class="carousel-caption">
							<h3>School Building</h3>
							<p>Well structured facility for learning</p>
						</div>
					</div>
					<div class="item">
						<img src="img/3.jpg" alt="" class="img-responsive">
						<div class="carousel-caption">
							<h3>Students</h3>
							<p>We esteem our students so high with love.</p>
						</div>
					</div>
					<div class="item">
						<img src="img/4.jpg" alt="" class="img-responsive">
						<div class="carousel-caption">
							<h3>School Bus</h3>
							<p>We have buses to all destinations you are coming from.</p>
						</div>
					</div>
					<div class="item">
						<img src="img/5.jpg" alt="" class="img-responsive">
						<div class="carousel-caption">
							<h3>Staff Room</h3>
							<p>A collection of well knowledged staff.</p>
						</div>
					</div>
					<div class="item">
						<img src="img/6.jpg" alt="" class="img-responsive">
						<div class="carousel-caption">
							<h3>Class Room</h3>
							<p>With a very conducive learning environment</p>
						</div>
					</div>
					<div class="item">
						<img src="img/7.jpg" alt="" class="img-responsive">
						<div class="carousel-caption">
							<h3>Confectionary</h3>
							<p>One of the best chill out zone you can think of.</p>
						</div>
					</div>
					<div class="item">
						<img src="img/8.jpg" alt="" class="img-responsive">
						<div class="carousel-caption">
							<h3>Computer Laboratory</h3>
							<p>Stocked with the best of ICT exposure your child needs.</p>
						</div>
					</div>
				</div>
				
				<!--Carousel Nav---->
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">
					<span class="icon-prev"></span>
				</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">
					<span class="icon-next"></span>
				</a>
				
			</div>
		</div>
		<div class="clearfix"></div>
		<hr>
		
		<!----Content Section----->
		<div class="container-fluid">
			<div class="row">
			  <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				  <img src="img/thumb1.jpg" alt="DBSS Students">
				  <div class="caption">
					<h3><span class="glyphicon glyphicon-education"></span> Students</h3>
					<p>
						The youth today run the risk of being use as tools for 
						perpetrating evils. Moral sense of what is good becomes necessary for 
						the future of the youth where honesty, responsibility and sense of 
						purpose are inculcated in the youth consciousness. Salesian Youth 
						Movement brings you back to your root ...
					</p>
					<p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span> Students</a> <a href="#" class="btn btn-default" role="button">Read More</a></p>
				  </div>
				</div>
			  </div>
			  <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				  <img src="img/thumb2.jpg" alt="About DBSS">
				  <div class="caption">
					<h3><span class="glyphicon glyphicon-flag"></span> About Us</h3>
					<p>
						The Rector is the Superior of the local Salesian Community. He 
						animates and directs the whole community towards the achievement of all 
						educational goals in the light of the school philosophy and mission. 
						Together with the House Council, the Rector bears the responsibility for
						all ...
					</p>
					<p><a href="read.txt" class="btn btn-primary fancybox fancybox.ajax" role="button"><span class="glyphicon glyphicon-thumbs-up"></span> About</a> <a href="read.txt" class="btn btn-default fancybox fancybox.ajax" role="button">Read More</a></p>
				  </div>
				</div>
			  </div>
			  <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				  <img src="img/thumb3.jpg" alt="map">
				  <div class="caption">
					<h3><span class="glyphicon glyphicon-map-marker"></span> Our Location</h3>
					<p>
						You are very much welcome to Don Bosco Secondary School, 
						Ibolo-Obosi.
						The Don Bosco Secondary School (DBSS) is a part of St. John Bosco youth 
						Centre Onitsha, situated at Don Bosco Avenue off KM 7 Onitsha-Owerri 
						Road, Ibolo Layout Obosi,  Anambra State Nigeria.
					</p>
					<p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-thumbs-up"></span> Locations</a> <a href="http://dbssobosi.com/contact.php" class="btn btn-default" role="button">Read More</a></p>
				  </div>
				</div>
			  </div>
			</div>
		</div>
		
		<!----Footer Section----->
		
		<footer class="container-fluid">
			<div class="row footer_text">
			  <div class="col-sm-6 col-md-4">
				<h4>Quick Links</h4>
				<p><a href="http://dbssobosi.com/about.php">About</a></p>
				<p><a href="http://dbssobosi.com/contact.php">Contact</a></p>
				<p><a href="http://dbssobosi.com/manager.php">Manager</a></p>
				<p><a href="http://dbssobosi.com/contact.php">Send us a mail</a></p>
			  </div>
			  <div class="col-sm-6 col-md-4">
				<h4>Contact</h4>
				<p>
					P.O. BOX 314 ONITSHA, ANAMBRA STATE. <br>
					Email: dbssobosi@gmail.com <br>
					Phone Number: +2348061220623, +2347083721510 <br>
					Make your payments through the following banks: <br>
					FIRST BANK: 3065466217 ACCOUNT ...
				</p>
			  </div>
			  <div class="col-sm-6 col-md-4">
				<h4>Newsletter</h4>
				<p>
					Stay up to date with events and happenings in DBSS Obosi.<br>
					Enter your email Address:
					</p><form class="form" method="POST" action="">
						<div class="input-group">
							<input name="subscribers_email" required="" class="form-control" placeholder="Email Address" type="email">
							<span class="input-group-btn">
								<button class="btn btn-primary" name="subscribe_btn" type="submit"><span class="glyphicon glyphicon-ok"></span> Subscribe</button>
							</span>
						</div>
					</form>
				<p></p>
			  </div>
			</div>
			<hr>
			<div class="text-center footer_copyright">
				<p>All right reserved. Copyright © 2016 www.dbssobosi.com :: Powered <a href="http://www.Toxaswift.com/" target="_blank">Toxaswift</a></p>
			</div>
		</footer>	
	</body>

</html>