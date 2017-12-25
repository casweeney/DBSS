<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/php; charset=UTF-8">
		<title>Administration :: Don Bosco Secondary School Obosi</title>
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
							<li><a href="#"><span class="glyphicon glyphicon-pencil"></span> Administration</a></li>
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
					<h3><span class="glyphicon glyphicon-king"></span> Administration</h3>
				</div>	
				<div class="panel-body col-md-12 col-md-8 text-justify">
					<p>1.    The Rector is the Superior of the local Salesian 
						Community. He animates and directs the whole community towards the 
						achievement of all educational goals in the light of the school 
						philosophy and mission. Together with the House Council, the Rector 
						bears the responsibility for all policy decisions and implementation.
					</p>
					<p>2.    The Governing Council/House Council assists the Rector in 
						everything that concerns the animation and government of the training 
						centre and Salesian community. It is the policy-making body of the 
						centre. The members of the House Council are the following: Rector, 
						Vicar, Economer, and Salesians responsible for the principal sectors of 
						the community's activity.
					</p>
					<p>3.    The Vicar assists the Rector and assumes the position of the Rector in the latter's absence or incapacity.</p>
					<p>4.    The Economer is the financial officer who is responsible 
						for all financial transactions and accounting records of the house. He 
						takes direct responsibility for the Hostel, construction and maintenance
						of the building.  The accounts office collaborates with him.
					</p>
					<p>6.    The COUNSELLOR takes care of psychological and behavioural
						growth of students.  Oversees to the Peer 'C' formation and activities.
					</p>
					<p>7.    The School Principal is the educational leader and chief 
						executive who is responsible for policy implementation and co-ordination
						of all training and educational tasks in the school. He oversees the 
						regular operation of the whole school. Together with his staff, the 
						Principal plans, organises, co-ordinates, supervises and evaluates all 
						the curricular and extra-curricular activities of the school.
					</p>
					<p>8.    The Secretary/Registrar is the custodian of student 
						records and credentials. She / He takes care of the registration of the 
						students.
					</p>
				</div>
				<div class="panel-body col-md-12 col-md-4">
					<img src="img/thumb2.jpg" class="img-responsive">
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
					</p>
					<form class="form" method="POST" action="">
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