<?php
	require_once("includes/session.php");
	require_once("includes/connection.php");
?>
<?php
	//////////////// DEFAULT NULL VALUES ///////////////
	$error = array();
	$date = date('d/M/Y');
	$select = "--select--";
?>
<?php
	/////////////// POST ACTION TO REGISTER STUDDENTS WHEN THE REGISTER BUTTON IS CLICKED //////////////////
	if(isset($_POST['student_reg_btn'])){
		$reg_student_gender = $_POST['reg_student_gender'];
		$reg_student_firstname = $_POST['reg_student_firstname'];
		$reg_student_lastname = $_POST['reg_student_lastname'];
		$reg_student_othername = $_POST['reg_student_othername'];
		$reg_student_dob = $_POST['reg_student_dob'];
		$reg_student_mob = $_POST['reg_student_mob'];
		$reg_student_yob = $_POST['reg_student_yob'];
		$reg_student_phone = $_POST['reg_student_phone'];
		$reg_student_address = $_POST['reg_student_address'];
		$reg_student_email = $_POST['reg_student_email'];
		$reg_student_password = $_POST['reg_student_password'];
		$reg_student_state = $_POST['reg_student_state'];
		$reg_student_nationality = $_POST['reg_student_nationality'];
		$reg_sponsor_name = $_POST['reg_sponsor_name'];
		$reg_sponsor_phone = $_POST['reg_sponsor_phone'];
		$reg_sponsor_relationship = $_POST['reg_sponsor_relationship'];
		$reg_student_tc = $_POST['reg_student_tc'];
		$school_name = "SCHOOLNAME";
		$reg_number = 2016 .$school_name .$reg_student_tc;
		
					////////////////// ERROR-CHECKING IF SPECIFIED FIELD IS EMPTY ////////////////////
					if(empty($reg_student_gender)){
						$error[] = "Error: Gender Required <br /><br />";
					}
					if(empty($reg_student_firstname)){
						$error[] = "Error: Firstname Required <br /><br />";
					}
					if(empty($reg_student_lastname)){
						$error[] = "Error: Lastname Required <br /><br />";
					}
					if(empty($reg_student_dob)){
						$error[] = "Error: Date of Birth Required <br /><br />";
					}
					if($reg_student_dob == $select){
						$error[] = "Error: Day of Birth Required <br /><br />";
					}
					if($reg_student_mob == $select){
						$error[] = "Error: Month of Birth Required <br /><br />";
					}
					if($reg_student_yob == $select){
						$error[] = "Error: Year of Birth Required <br /><br />";
					}
					if(empty($reg_student_address)){
						$error[] = "Error: Address Required <br /><br />";
					}
					if($reg_student_state == $select){
						$error[] = "Error: State of origin Required <br /><br />";
					}
					if(empty($error)){
						$query = " INSERT INTO `students` SET
									`gender` = '$reg_student_gender',
									`firstname` = '$reg_student_firstname',
									`lastname` = '$reg_student_lastname',
									`othername` = '$reg_student_othername',
									`dob` = '$reg_student_dob',
									`mob` = '$reg_student_mob',
									`yob` = '$reg_student_yob',
									`contactphone` = '$reg_student_phone',
									`address` = '$reg_student_address',
									`email` = '$reg_student_email',
									`password` = '$reg_student_password',
									`state` = '$reg_student_state',
									`nationality` = '$reg_student_nationality',
									`sponsorname` = '$reg_sponsor_name',
									`sponsorphone` = '$reg_sponsor_phone',
									`relationship` = '$reg_sponsor_relationship',
									`studentclass` = '$reg_student_tc',
									`date_of_reg` = '$date',
									`reg_number` = '$reg_number'";
						
						$run_query = mysqli_query($connection, $query);
						if($run_query == true){
							
							$query = " SELECT * FROM students WHERE reg_number = '{$reg_number}' ";
							$run_query = mysqli_query($connection, $query);
							if(mysqli_num_rows($run_query) == 1){
								while($result = mysqli_fetch_assoc($run_query)){
									$student_id = $result['id'];
									
									$_SESSION['student_id'] = $student_id;
									header("Location:reg_slip.php");
								}
								
							}else{
								$msg = "Registration Failed";
							}
							
						}else{
							$msg = "... Error: Registration not successfull ...";
						}
					}
					
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Student Registration</title>
		<meta http-equiv="content-type" content="text/php; charset=UTF-8">
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
		<br />
		<div class='container'>
			<div class='row'>
				<div class='col-md-2 col-sm-2 col-xs-12'>
				
				</div>
				<div class='col-md-8 col-sm-12 col-xs-12'>
					<div class='panel panel-primary'>
						<div class='panel-heading'>
							<h3 class='text-center'><u>Student Registration Form</u></h3>
							<h4>
								<b>
									<?php
										foreach($error as $msg){
											echo $msg;
										}
									?>
									<?php if(isset($msg)){echo $msg;} ?>
								</b>
							</h4>
						</div>
						<div class='panel-body'>
							<form method='POST' action='registration.php'>
								<legend>Students Bio-Data</legend>
								<div class='input-group'>
									<span class='input-group-addon' id='basic-addon2'>Gender:</span>
									<select class='form-control' name='reg_student_gender'>
										<option selected ><?php echo $select; ?></option>
										<option value='male'>Male</option>
										<option value='female'>Female</option>
									</select>
								</div>
								<br />
								<div class='input-group'>
									<span class='input-group-addon' id='basic-addon2'>First Name:</span>
									<input type='text' name='reg_student_firstname' required class='form-control' placeholder='Enter first name (surname)' aria-describedby='basic-addon2'>
								</div>
								<br />
								<div class='input-group'>
									<span class='input-group-addon' id='basic-addon2'>Last Name:</span>
									<input type='text' name='reg_student_lastname' required class='form-control' placeholder='Enter last name' aria-describedby='basic-addon2'>
								</div>
								<br/>
								<div class='input-group'>
									<span class='input-group-addon' id='basic-addon2'>Other Name:</span>
									<input type='text' name='reg_student_othername' class='form-control' placeholder='Enter other name (optional)' aria-describedby='basic-addon2'>
								</div>
								<br/>
								<div class='row'>
									<div class='col-md-4 col-sm-4 col-xs-12'>
										<br />
										<div class='input-group'>
											<span class='input-group-addon' id='basic-addon2'>D O B:</span>
											<select class='form-control' name='reg_student_dob' style='width: 100%; float: left;'>
												<option selected><?php echo $select; ?></option>
												<?php
													for($dob = 1; $dob <= 31; $dob++){
														echo "<option>{$dob}</option>";
													}
												?>
											</select>
										</div>
									</div>
									<div class='col-md-4 col-sm-4 col-xs-12'>
										<br />
										<div class='input-group'>
											<span class='input-group-addon' id='basic-addon2'>MONTH:</span>
											<select class='form-control' name='reg_student_mob' style='width: 100%; float: left;'>
												<option selected><?php echo $select; ?></option>
												<?php
													$month_array = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
													
													foreach($month_array as $month){
														echo "<option>{$month}</option><br>";
													}
												?>
											</select>
										</div>
									</div>
									<div class='col-md-4 col-sm-4 col-xs-12'>
										<br />
										<div class='input-group'>
											<span class='input-group-addon' id='basic-addon2'>YEAR:</span>
											<select class='form-control' name='reg_student_yob' style='width: 100%; float: left;'>
												<option selected><?php echo $select; ?></option>
												<?php
													for($year = 2016; $year >= 1960; $year--){
														echo "<option>{$year}</option>";
													}
												?>
											</select>
										</div>
									</div>
								</div>
								<br />
								<legend>Contact</legend>
									<div class='input-group'>
										<span class='input-group-addon' id='basic-addon2'>Contact Phone:</span>
										<input type='phone' name='reg_student_phone' required class='form-control' placeholder='Enter nearest phone number to you' aria-describedby='basic-addon2'>
									</div>
									<br />
									<div class='input-group'>
										<span class='input-group-addon' id='basic-addon2'>Home Address:</span>
										<textarea rows='3' name='reg_student_address' required class='form-control' placeholder='...' aria-describedby='basic-addon2'></textarea>
									</div>
									<br/>
									<div class='input-group'>
										<span class='input-group-addon' id='basic-addon2'>Email:</span>
										<input type='text' name='reg_student_email' required class='form-control' placeholder='Enter email address' aria-describedby='basic-addon2'>
									</div>
									<br />
									<div class='input-group'>
										<span class='input-group-addon' id='basic-addon2'>Password:</span>
										<input type='password' name='reg_student_password' required class='form-control' placeholder='Enter your password' aria-describedby='basic-addon2'>
									</div>
									<br />
									
								<legend>Place Of Origin</legend>
								<div class='input-group'>
									<span class='input-group-addon' id='basic-addon2'>State:</span>
									<select class='form-control' name='reg_student_state'>
										<option selected ><?php echo $select; ?></option>
										<?php
											$state_array = array("Abia", "Adamawa", "Akwa ibom", "Anambra", "Bauchi", "Bayelsa", "Benue", "Borno", "Cross River", "Delta", "Ebonyi", "Edo", "Ekiti", "Enugu", "Gombe", "Imo", "Jigawa", "Kaduna", "Kano", "Katsina", "Kebbi", "Kogi", "Kwara", "Lagos", "Nasarawa", "Niger", "Ogun", "Ondo", "Osun", "Oyo", "Plateau", "Rivers", "Sokoto", "Taraba", "Yobe", "Zamfara", "FCT Abuja");
											
											foreach($state_array as $state){
												echo "<option>{$state}</option><br>";
											}
										?>
									</select>
								</div>
								<br />
								<div class='input-group'>
									<span class='input-group-addon' id='basic-addon2'>Nationality:</span>
									<select class='form-control' name='reg_student_nationality'>
										<option selected ><?php echo $select; ?></option>
										<option>Nigerian</option>
										<option>Non-nigerian</option>
									</select>
								</div>
								<br />
								<legend>Sponsor</legend>
								<div class='input-group'>
									<span class='input-group-addon' id='basic-addon2'>Name:</span>
									<input type='text' name='reg_sponsor_name' required class='form-control' placeholder='Enter sponsors name' aria-describedby='basic-addon2'>
								</div>
								<br />
								<div class='input-group'>
									<span class='input-group-addon' id='basic-addon2'>Name:</span>
									<input type='phone' name='reg_sponsor_phone' required class='form-control' placeholder='Enter sponsors phone number' aria-describedby='basic-addon2'>
								</div>
								<br />
								<div class='input-group'>
									<span class='input-group-addon' id='basic-addon2'>Relationship:</span>
									<select class='form-control' name='reg_sponsor_relationship'>
										<option selected ><?php echo $select; ?></option>
										<option>Self</option>
										<option>Parent</option>
										<option>Sibling</option>
										<option>Guardian</option>
										<option>Others</option>
									</select>
								</div>
								<br />
								
								<legend>Academics</legend>
								<div class='input-group'>
									<span class='input-group-addon' id='basic-addon2'>Targeted Class:</span>
									<select class='form-control' name='reg_student_tc'>
										<option selected ><?php echo $select; ?></option>
										<option>JSS1</option>
										<option>JSS2</option>
										<option>JSS3</option>
										<option>SSS1</option>
										<option>SSS2</option>
										<option>SSS3</option>
									</select>
								</div>
								<br />
								<!--
								<legend>Multimedia</legend>
								<div class='input-group'>
									<span class='input-group-addon' id='basic-addon2'>Passport:</span>
									<input type='file' name='reg_student_passport' required class='form-control' placeholder='Enter sponsors name' aria-describedby='basic-addon2'>
								</div>
								-->
								<div class='text-center'>
									<input type='submit' name='student_reg_btn' value='REGISTER NEW STUDENT' class='btn btn-primary' />
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class='col-md-2 col-sm-2 col-xs-12'>
				
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