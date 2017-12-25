<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/php; charset=UTF-8">
		<title>Gallery :: Don Bosco Secondary School Obosi</title>
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
		<script type="text/javascript" src="js/fancytech.js"></script>
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
						<li><a href="gallery.php"><span class="glyphicon glyphicon-road"></span> School Facilities</a></li>
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
		
		<!----Content Section----->
		<div class="container-fluid">
			<div class="panel panel-default">
				<div class="panel-heading">
					<span class="glyphicon glyphicon-education"></span> School Facilities
				</div>
				<div class="panel-body">
					<div class="row">
					  
					  <div class="col-xs-12 col-md-4">
						<div class="thumbnail">
						  <a class="fancybox-buttons" data-fancybox-group="button" title="School Building" href="img/E.jpg"><img src="img/E.jpg" class="img-thumbnail" alt="DBSS"></a>
						  <div class="caption text-center">
							<p>School Building</p>
						  </div>
						</div>
					  </div>
					  <div class="col-xs-12 col-md-4">
						<div class="thumbnail">
						  <a class="fancybox-buttons" data-fancybox-group="button" title="School Refectory" href="img/N.jpg"><img src="img/N.jpg" class="img-thumbnail" alt="DBSS"></a>
						  <div class="caption text-center">
							<p>School Refectory</p>
						  </div>
						</div>
					  </div>
					  <div class="col-xs-12 col-md-4">
						<div class="thumbnail">
						  <a class="fancybox-buttons" data-fancybox-group="button" title="School Bus" href="img/P.jpg"><img src="img/P.jpg" class="img-thumbnail" alt="DBSS"></a>
						  <div class="caption text-center">
							<p>School Bus</p>
						  </div>
						</div>
					  </div>
					  
					</div>
				</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<span class="glyphicon glyphicon-cd"></span> Sporting Activity
				</div>
				<div class="panel-body">
					<div class="row">
					  
					  <div class="col-xs-12 col-md-4">
						<div class="thumbnail">
						  <a class="fancybox-thumbs" data-fancybox-group="thumb" title="Sporting Lectures" href="img/R.jpg"><img src="img/R.jpg" class="img-thumbnail" alt="DBSS Students"></a>
						  <div class="caption text-center">
							<p>Sporting Lectures</p>
						  </div>
						</div>
					  </div>
					  <div class="col-xs-12 col-md-4">
						<div class="thumbnail">
						  <a class="fancybox-thumbs" data-fancybox-group="thumb" title="Basketball Champions" href="img/L.jpg"><img src="img/L.jpg" class="img-thumbnail" alt="DBSS Students"></a>
						  <div class="caption text-center">
							<p>Basketball Champions</p>
						  </div>
						</div>
					  </div>
					  <div class="col-xs-12 col-md-4">
						<div class="thumbnail">
						  <a class="fancybox-thumbs" data-fancybox-group="thumb" title="Football Champions" href="img/S.jpg"><img src="img/S.jpg" class="img-thumbnail" alt="DBSS Students"></a>
						  <div class="caption text-center">
							<p>Football Champions</p>
						  </div>
						</div>
					  </div>
					  
					</div>
				</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<span class="glyphicon glyphicon-hourglass"></span> Laboratories
				</div>
				<div class="panel-body">
					<div class="row">
					  
					  <div class="col-xs-12 col-md-4">
						<div class="thumbnail">
						  <a class="fancybox" rel="group3" title="Computer Laboratory" href="img/Q.jpg"><img src="img/Q.jpg" class="img-thumbnail" alt="DBSS"></a>
						  <div class="caption text-center">
							<p>Computer Laboratory</p>
						  </div>
						</div>
					  </div>
					  <div class="col-xs-12 col-md-4">
						<div class="thumbnail">
						  <a class="fancybox" rel="group3" title="Laboratory Lectures" href="img/M.jpg"><img src="img/M.jpg" class="img-thumbnail" alt="DBSS"></a>
						  <div class="caption text-center">
							<p>Laboratory Lectures</p>
						  </div>
						</div>
					  </div>
					  <div class="col-xs-12 col-md-4">
						<div class="thumbnail">
						  <a class="fancybox" rel="group3" title="Lectures" href="img/W.jpg"><img src="img/W.jpg" class="img-thumbnail" alt="DBSS"></a>
						  <div class="caption text-center">
							<p>Lectures</p>
						  </div>
						</div>
					  </div>
					  
					</div>
				</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<span class="glyphicon glyphicon-picture"></span> Random
				</div>
				<div class="panel-body">
					<div class="row">
					  
					  <div class="col-xs-12 col-md-4">
						<div class="thumbnail">
						  <a class="fancybox" rel="group4" title="Staff Room" href="img/F.jpg"><img src="img/F.jpg" class="img-thumbnail" alt="DBSS"></a>
						  <div class="caption text-center">
							<p>Staff Room</p>
						  </div>
						</div>
					  </div>
					  <div class="col-xs-12 col-md-4">
						<div class="thumbnail">
						  <a class="fancybox" rel="group4" title="Basketball Court" href="img/X.jpg"><img src="img/X.jpg" class="img-thumbnail" alt="DBSS"></a>
						  <div class="caption text-center">
							<p>Basketball Court</p>
						  </div>
						</div>
					  </div>
					  <div class="col-xs-12 col-md-4">
						<div class="thumbnail">
						  <a class="fancybox" rel="group4" title="Morning Devotion" href="img/D.jpg"><img src="img/D.jpg" class="img-thumbnail" alt="DBSS"></a>
						  <div class="caption text-center">
							<p>Morning Devotion</p>
						  </div>
						</div>
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