<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="resources/css/bootstrap.css">

	<!-- Normal CSS -->
	<link rel="stylesheet" href="resources/css/styles.css">
</head>

<body>
	<?php include './nav_footer/navbar.php' ?>

	<main class="login-form">
		<div class="cotainer">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header">Register</div>
						<div class="card-body">
							<?php include('errors.php'); ?>
							<!-- Teacher Registration Form Starts.. -->
							<form action="register.php" method="POST">
								<div class="form-group row">
									<label for="teacherFullName" class="col-md-4 col-form-label text-md-right">Full Name</label>
									<div class="col-md-6">
										<input type="text" id="teacherFullName" class="form-control" name="teacherFullName" value="<?php echo $teacherFullName ?>" required>
									</div>
								</div>
								<div class=" form-group row">
									<label for="userEmail" class="col-md-4 col-form-label text-md-right">E-mail Address</label>
									<div class="col-md-6">
										<input type="email" id="userEmail" class="form-control" name="userEmail" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="teacherMobile" class="col-md-4 col-form-label text-md-right">Mobile</label>
									<div class="col-md-6">
										<input type="number" id="teacherMobile" class="form-control" name="teacherMobile" placeholder="0755100700" required autofocus>
									</div>
								</div>
								<div class="form-group row">
									<label for="teacherCheckNumber" class="col-md-4 col-form-label text-md-right">Check Number</label>
									<div class="col-md-6">
										<input type="number" id="teacherCheckNumber" class="form-control" name="teacherCheckNumber" placeholder="110045567" required>
									</div>
								</div>
								<!-- Transfer Details -->

								<div class="form-group row">
									<label for="subject" class="col-md-4 col-form-label text-md-right">Subject</label>
									<div class="col-md-6">
										<select id="subject" class="form-control" name="subject" required>
											<option value="English">English</option>
											<option value="Mathematics">Mathematics</option>
											<option value="Biology">Biology</option>
											<option value="History">History</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label for="transferFrom" class="col-md-4 col-form-label text-md-right">Transfer From</label>
									<div class="col-md-6">
										<select id="transferFrom" class="form-control" name="transferFrom" required>
											<option value="Kibasila_A">Kibasila A</option>
											<option value="Kibasila_B">Kibasila B</option>
											<option value="Wailes">Wailes</option>
											<option value="Taifa">Taifa</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label for="transferTo" class="col-md-4 col-form-label text-md-right">Transfer To</label>
									<div class="col-md-6">
										<select id="transferTo" class="form-control" name="transferTo" required autofocus>
											<option value="Kibasila_A">Kibasila A</option>
											<option value="Kibasila_B">Kibasila B</option>
											<option value="Wailes">Wailes</option>
											<option value="Taifa">Taifa</option>
										</select>
									</div>
								</div>

								<div class="form-group row">
									<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
									<div class="col-md-6">
										<input type="password" id="password" class="form-control" name="password" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="confirmPassword" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
									<div class="col-md-6">
										<input type="password" id="confirmPassword" class="form-control" name="confirmPassword" required>
									</div>
								</div>

								<div class="col-md-6 offset-md-4 ">
									<button type="submit" class="btn btn-primary btn-block" name="reg_teacher">
										Register
									</button>
									<p class="mt-3 text-right">
										Already have an Account?
										<a href="login.php">Login
										</a>
									</p>

								</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>

	</main>

	<script src="resources/js/bootstrap.min.js"></script>
</body>

</html>