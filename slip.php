<?php
	require_once("includes/session.php");
	require_once("includes/connection.php");
?>
<?php
	$query = " SELECT * FROM students WHERE id = '{$_SESSION['student_id']}' ";
	$run_query = mysqli_query($connection, $query);
	if(mysqli_num_rows($run_query) == 1){
		while($result = mysqli_fetch_assoc($run_query)){
			$student_id = $result['id'];
			$student_reg_number = $result['reg_number'];
			$student_firstname = $result['firstname'];
			$student_lastname = $result['lastname'];
			$student_othername = $result['othername'];
			$student_othername = $result['othername'];
			$student_gender = $result['gender'];
			$student_state = $result['state'];
			$student_nationality = $result['nationality'];
			$dob = $result['dob'];
			$mob = $result['mob'];
			$yob = $result['yob'];
			$student_phone = $result['contactphone'];
			$student_address = $result['address'];
			$student_password = $result['password'];
			$student_class = $result['studentclass'];
			$sponsor_name = $result['sponsorname'];
			$sponsor_phone = $result['sponsorphone'];
			$sponsor_relationship = $result['relationship'];
			$reg_date = $result['date_of_reg'];
			$reg_day = substr($reg_date, 0, 2);
			$reg_month = substr($reg_date, 3, 3);
			$reg_year = substr($reg_date, 7, 4);
			$student_age = $reg_year - $yob;
			
			
			$msg_reg_number = "{$student_reg_number}";
			$msg_firstname = "{$student_firstname}";
			$msg_lastname = "{$student_lastname}";
			$msg_othername = "{$student_othername}";
			$msg_gender = ucfirst($student_gender);
			$msg_state = "{$student_state}";
			$msg_nationality = "{$student_nationality}";
			$msg_dob = "{$dob}";
			$msg_mob = "{$mob}";
			$msg_yob = "{$yob}";
			$msg_phone = "{$student_phone}";
			$msg_address = "{$student_address}";
			$msg_password = "{$student_password}";
			$msg_class = "{$student_class}";
			$msg_sponsor_name = "{$sponsor_name}";
			$msg_sponsor_phone = "{$sponsor_phone}";
			$msg_sponsor_relationship = "{$sponsor_relationship}";
			$msg_reg_day = "{$reg_day}";
			$msg_reg_month = "{$reg_month}";
			$msg_reg_year = "{$reg_year}";
			$msg_student_age = "{$student_age}";
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<head>
		<title><?php echo $msg_lastname; ?> - Print Slip</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<meta name="description" content="print registration slip" />
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
		<link type="text/css" rel="stylesheet" href="css/font-awesome.css" />
		<link rel="stylesheet" href="css/defined.css" />
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>
	<body>
		<div class='container thumbnail'>
			<div class='row'>
				<div class='col-xs-3 col-sm-2 col-md-2 text-center'>
					<a href='index.php'><img class='img-rounded img-thumbnail img-responsive' src='img/logo.png' alt='logo'/></a>
				</div>
				
				<div class='col-xs-6 col-sm-8 col-md-8 text-center'>
					<h3>DON-BOSCO SECONDARY SCHOOL</h3>
					<p class='text-danger'>
						Address: Border Road Ikom, <br/> Motto: best legacy is our motto, <br/> Telephone: 07036798652
					</p>
				</div>
				
				<div class='col-xs-3 col-sm-2 col-md-2 text-center text-responsive'> 
					<img class='img-rounded img-thumbnail img-responsive' src='passport/avatar.gif' alt='Passport'/>
				</div>
			</div>
			<hr />
			
			<div class='container row'>
				<div class='col-xs-12 col-md-6'>
					<legend>Bio-Data</legend>
					<p>First Name: <?php echo $msg_firstname; ?></p>
					<p>Last Name: <?php echo $msg_lastname; ?></p>
					<p>Other Name: <?php echo $msg_othername; ?></p>
					<p>Gender: <?php echo $msg_gender; ?></p>
					<p>State: <?php echo $msg_state; ?></p>
					<p>Nationality: <?php echo $msg_nationality; ?></p>
				</div>
				<div class='col-xs-12 col-md-6'>
					<legend>Birthday</legend>
					<p>Age: <?php echo $msg_student_age; ?></p>
					<p>Date: <?php echo $msg_dob; ?></p>
					<p>Month: <?php echo $msg_mob; ?></p>
					<p>Year: <?php echo $msg_yob; ?></p>
				</div>
			</div>
			<br />
			
			<div class='container row'>
				<div class='col-xs-12 col-md-6'>
					<legend>Contact</legend>
					<p>Nearest Phone: <?php echo $msg_phone; ?></p>
					<p>Home Address: <?php echo $msg_address; ?></p>
				</div>
				<div class='col-xs-12 col-md-6'>
					<legend>Academics</legend>
					<p>Registration No: <?php echo $msg_reg_number; ?></p>
					<p>Password: <?php echo $msg_password; ?></p>
					<p>Class: <?php echo $msg_class; ?></p>
				</div>
			</div>
			<br/>
			
			<div class='container row'>
				<div class='col-xs-12 col-md-6'>
					<legend>Sponsor:</legend>
					<p>Name: <?php echo $msg_sponsor_name; ?></p>
					<p>Phone: <?php echo $msg_sponsor_phone; ?></p>
					<p>Relationship: <?php echo $msg_sponsor_relationship; ?></p>
				</div>
				<div class='col-xs-12 col-md-6'>
					<legend>Registered</legend>
					<p>Date: <?php echo $msg_reg_day; ?></p>
					<p>Month: <?php echo $msg_reg_month; ?></p>
					<p>Year: <?php echo $msg_reg_year; ?></p>
				</div>
			</div>
			<hr/>
			
			<div class='container row'>
				<div class='col-xs-12 col-md-12 text-center'>
					<em>
						<strong>NOTE:</strong> Print this slip and keep it safe, you will require this for effective service of your school portal. 
						We are always ready to asisst in any way we can. 
						<br/>
						<span class='glyphicon glyphicon-phone'></span> 2347036798652</a>, 
						<span class='glyphicon glyphicon-envelope'></span> support@toxaswift.com. 
						<button type='button' class='btn btn-default' onclick="printDiv('printableArea')" value='print a div!'><span class='glyphicon glyphicon-print'></span></button>
						<a href='../student_management/'><span class='glyphicon glyphicon-remove'></span> Close Slip</a> 
					</em>
				</div>
			</div>
			
		</div>
	</body>
</html>