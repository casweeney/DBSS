<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/php; charset=UTF-8">
		<title>Calendar :: Don Bosco Secondary School Obosi</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="img/dbss.jpg">
		<link rel="stylesheet" href="css/dbss.css" type="text/css">
		<link href="css/bootstrap.css" rel="stylesheet" />
		<script type="text/javascript" src="jquery/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/dbss.js"></script>
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
		
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3><span class="glyphicon glyphicon-calendar"></span> School Calendar 2016</h3>
				</div>	
				<div class="panel-body col-md-12 col-md-8 text-justify">
					<table class="table table-striped table-hover" border="1">
						<thead class="table-striped">
							<tr>
								<th>S/N</th>
								<th>Date</th>
								<th>Activity</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1.</td>
								<td>Tue 24, 5 2016</td>
								<td>Resumption Date</td>
							</tr>
							<tr>
								<td>2.</td>
								<td>Tue 24, 5 2016</td>
								<td>Resumption Date</td>
							</tr>
							<tr>
								<td>3.</td>
								<td>Tue 24, 5 2016</td>
								<td>Resumption Date</td>
							</tr>
							<tr>
								<td>4.</td>
								<td>Tue 24, 5 2016</td>
								<td>Resumption Date</td>
							</tr>
							<tr>
								<td>5.</td>
								<td>Tue 24, 5 2016</td>
								<td>Resumption Date</td>
							</tr>
							<tr>
								<td>6.</td>
								<td>Tue 24, 5 2016</td>
								<td>Resumption Date</td>
							</tr>
							<tr>
								<td>7.</td>
								<td>Tue 24, 5 2016</td>
								<td>Resumption Date</td>
							</tr>
							<tr>
								<td>8.</td>
								<td>Tue 24, 5 2016</td>
								<td>Resumption Date</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="panel-body col-md-12 col-md-4">
					<img src="img/logo.png" class="img-responsive">
				</div>
			</div>
		</div>
		
		<div class="clearfix"></div>
		
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
				<p>All right reserved. Copyright © 2016 www.dbssobosi.com :: Powered By Gigo~Planet &amp; <a href="http://www.brondchux.com/" target="_blank">BrondChux</a></p>
			</div>
		</footer>
	</body>
</html>