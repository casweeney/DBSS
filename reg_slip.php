<?php
	require_once("includes/session.php");
	require_once("includes/connection.php");
?>
<?php
	///////// GET THE STUDENT REG NUMBER FROM DATABASE FROM THE REGISTRATION FORM IF SUCCESSFUL USING SESSION //////////////
	$query = " SELECT * FROM students WHERE id = '{$_SESSION['student_id']}' ";
	$run_query = mysqli_query($connection, $query);
	if(mysqli_num_rows($run_query) == 1){
		while($result = mysqli_fetch_assoc($run_query)){
			$student_id = $result['id'];
			$student_reg_number = $result['reg_number'];
			$msg = "{$student_reg_number} <br />";
		}
	}
?>
<?php
	if(isset($_POST['view_slip_btn'])){
		$view_slip_reg_no = $_POST['view_slip_reg_no'];
		
		$query = " SELECT * FROM students WHERE reg_number = '{$view_slip_reg_no}' ";
		$run_query = mysqli_query($connection, $query);
		if(mysqli_num_rows($run_query) == 1){
			while($result = mysqli_fetch_assoc($run_query)){
				$student_id = $result['id'];
				
				$_SESSION['student_id'] = $student_id;
				header("Location:slip.php");
			}
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<head>
		<title>Print Registration Slip</title>
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
		<div class='container'>
			<div class='row'>
				<div class='col-md-2'>
				
				</div>
				
				<div class='col-md-8'>
					<div class='panel panel-success'>
						<div class='panel-heading'>
							<h3>Registration Successfull ...</h3>
							<h3>Your Registration Number is: <u><?php echo $msg; ?></u></h3>
						</div>
						<div class='panel-body'>
							<form method='POST' action=''>
								<div class='input-group'>
									<span class='input-group-addon' id='basic-addon2'>Reg Number:</span>
									<input type='text' name='view_slip_reg_no' required class='form-control' placeholder='Enter your reg number' aria-describedby='basic-addon2'>
								</div>
								<br />
								<div class='text-center'>
									<input type='submit' name='view_slip_btn' value='VIEW REGISTRATION SLIP' class='btn btn-success' />
								</div>
							</form>
						</div>
					</div>
				</div>
				
				<div class='col-md-2'>
				
				</div>
			</div>
		</div>
	</body>
</html>